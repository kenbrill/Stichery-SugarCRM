/*
 * Switchery 1.0
 */
/**
 * @class View.Fields.Base.BoolField
 * @alias SUGAR.App.view.fields.BaseBoolField
 * @extends View.Fields.Base.BaseField
 */
({
	plugins: ['CssLoader'],

	css: [
		'custom/javascript/Switchery/switchery.min.css'
	],
    /**
     * HTML tag of the select2 field.
     *
     * @property {String}
     */
    select2fieldTag: 'select',

    /**
     * @inheritdoc
     *
     * Renders both checkbox and dropdown
     */
    _render: function() {
        this._super('_render');
        this.$(this.select2fieldTag).select2({'minimumResultsForSearch': -1});
        this.invokeSwitchery();
    },

	invokeSwitchery: function() {
		var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

		elems.forEach(function(html) {
			if(html.dataset["switchery"]) {
				console.log('We have already initialized this one');
			} else {
			    //Here you could add all the options described on http://abpetkov.github.io/switchery/
				var switchery = new Switchery(html);
			}
		});
	},

    /**
     * @inheritdoc
     */
    _getFallbackTemplate: function(viewName) {
        if (viewName === 'massupdate') {
            return 'dropdown';
        }
        return this._super('_getFallbackTemplate', [viewName]);
    },

    /**
     * @inheritdoc
     */
    bindDomChange: function() {
        var $el = this.$(this.select2fieldTag);
        if (!$el.length) {
            $el = this.$(this.fieldTag);
        }
        $el.on('change', _.bind(function() {
            var value = $el.is(this.select2fieldTag) ? $el.val() : $el.prop('checked');
            this.model.set(this.name, this.unformat(value));
        }, this));
    },

    /**
     * @inheritdoc
     *
     * Bypass `render` when action is `massupdate` or `edit`.
     */
    bindDataChange: function() {
        if (!this.model) {
            return;
        }

        this.model.on('change:' + this.name, function(model, value) {
            if (this.action === 'massupdate') {
                this.$(this.select2fieldTag).val(this.format(value) ? '1' : '0');
            } else if (this.action === 'edit') {
                this.$(this.fieldTag).prop('checked', this.format(value));
            } else {
                this.render();
            }
        }, this);
    },

    /**
     * @inheritdoc
     */
    unbindDom: function() {
        this.$(this.select2fieldTag).off();
        this._super('unbindDom');
    },

    /**
     * @inheritdoc
     *
     * @param {String/Boolean} value The value to unformat.
     * @return {Boolean} Unformatted value.
     */
    unformat: function(value) {
        if (_.isString(value)) {
            value = value == '1';
        }
        return value;
    },

    /**
     * @inheritdoc
     *
     * @param {String/Boolean} value The value to format.
     * @return {Boolean} formatted value.
     */
    format: function(value) {
        if (_.isString(value)) {
            value = value == '1';
        }
        return value;
    }
})
