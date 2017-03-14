var renderGoogleInvisibleRecaptcha = function() {
    for (var i = 0; i < document.forms.length; ++i) {
      var form = document.forms[i];
      var holder = form.querySelector('.recaptcha-holder');
      if (null === holder){
        continue;
      }

      (function(frm){

        var holderId = grecaptcha.render(holder,{
          'sitekey': '6LdglxgUAAAAAF41rueI5bKpFnVCxKfb4LKzUNIW',
          'size': 'invisible',
          'badge' : 'bottomright', // possible values: bottomright, bottomleft, inline
          'callback' : function (recaptchaToken) {
            HTMLFormElement.prototype.submit.call(frm);
          }
        });

        frm.onsubmit = function (evt){
          evt.preventDefault();
          grecaptcha.execute(holderId);
        };

      })(form);
    }
  };
