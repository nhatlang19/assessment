/**
 * @file
 * JavaScript behaviors for checkboxes.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Adds HTML5 validation to required checkboxes.
   *
   * @type {Drupal~behavior}
   *
   * @see https://www.drupal.org/project/webform/issues/3068998
   */
  Drupal.behaviors.webformCheckboxesRadiosRequired = {
    attach: function (context) {
      $('.js-webform-type-checkboxes.required, .js-webform-type-webform-radios-other.checkboxes', context)
        .once('webform-checkboxes-required')
        .each(function () {
          var $element = $(this);
          var $firstCheckbox = $element
            .find('input[type="checkbox"]')
            .first();

          // Copy clientside_validation.module's message to the checkboxes.
          if ($element.attr('data-msg-required')) {
            $firstCheckbox.attr('data-msg-required', $element.attr('data-msg-required'));
          }

          $element.find('input[type="checkbox"]').on('click', required);
          required();

          function required() {
            var isChecked = $element.find('input[type="checkbox"]:checked');
            if (isChecked.length) {
              $firstCheckbox
                .removeAttr('required')
                .removeAttr('aria-required');
            }
            else {
              $firstCheckbox.attr({
                'required': 'required',
                'aria-required': 'true'
              });
            }
          }
        });
    }
  };

})(jQuery, Drupal);
;
/**
 * @file
 * JavaScript behaviors for radio buttons.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Adds HTML5 validation to required radios buttons.
   *
   * @type {Drupal~behavior}
   *
   * @see Issue #2856795: If radio buttons are required but not filled form is nevertheless submitted.
   */
  Drupal.behaviors.webformRadiosRequired = {
    attach: function (context) {
      $('.js-webform-type-radios, .js-webform-type-webform-radios-other', context).each(function () {
        var $element = $(this);
        var $radios = $element.find('input[type="radio"]');
        if ($element.hasClass('required')) {
          $radios.attr({'required': 'required', 'aria-required': 'true'});
        }
        // Copy clientside_validation.module's message to the radio buttons.
        if ($element.attr('data-msg-required')) {
          $radios.attr({'data-msg-required': $element.attr('data-msg-required')});
        }
      });
    }
  };

})(jQuery, Drupal);
;
/**
 * @file
 * JavaScript behaviors for options elements.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Attach handlers to options buttons element.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformOptionsButtons = {
    attach: function (context) {
      // Place <input> inside of <label> before the label.
      $(context).find('label.webform-options-display-buttons-label > input[type="checkbox"], label.webform-options-display-buttons-label > input[type="radio"]').each(function () {
        var $input = $(this);
        var $label = $input.parent();
        $input.detach().insertBefore($label);
      });
    }
  };


})(jQuery, Drupal);
;
