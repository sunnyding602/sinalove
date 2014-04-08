define(function (require) {
  require('$');
  var NodeSwitch = require('site.nodeSwitch');

  var loginWrapSwitch = new NodeSwitch({
    'containerId': 'loginSwitchWrap',
    'eventType': 'click'
  });

  var signForm = $('#signForm'),
      signUsername = $('#signUsername'),
      signPassword = $('#signPassword'),
      signCode = $('#signCode'),
      signCodeBtn = $('#signCodeBtn'),
      signCodeText = $('#signCodeText'),
      signJumpBtn = $('#signJumpBtn'),
      loginForm = $('#loginForm'),
      logUsername = $('#logUsername'),
      logPassword = $('#logPassword'),
      logJumpBtn = $('#logJumpBtn');

  var sendingCode = false,
      sendingTimer = 0;

  // change signwrap send code btn status
  function changeSignCodeBtnStatus(isSending) {
    if (isSending) {
      signCodeBtn
          .addClass('btn-disable')
          .removeClass('btn-normal')
          .html('剩余 60 秒');
      signCodeText.html('验证码已发送，请到邮箱查收。若未收到，60秒后可重新发送。');
    } else {
      signCodeBtn
          .addClass('btn-normal')
          .removeClass('btn-disable')
          .html('发送验证码');
      signCodeText.html('将验证码发送到邮箱，请查收。');
    }
  }

  // check email input
  function emailInputCheck(node) {
    if (node.value === '') {
      $(node).removeClass('alert');
      alert('请输入邮箱前缀');
      node.focus();
      $(node).addClass('alert');
      setTimeout(function () {
        $(node).removeClass('alert');
      }, 1000);
      return false;
    }
    return true;
  }

  // check password input
  function passwordInputCheck(node) {
    if (node.value.match(/[\w\._]{6,12}/) === null || node.value.match(/[\w\._]{6,12}/)[0] !== node.value) {
      $(node).removeClass('alert');
      alert('请检查密码是否规范');
      node.focus();
      $(node).addClass('alert');
      setTimeout(function () {
        $(node).removeClass('alert');
      }, 1000);
      return false;
    }
    return true;
  }

  // check verify code input
  function codeInputCheck(node) {
    if (node.value === '') {
      $(node).removeClass('alert');
      alert('请输入正确的验证码');
      node.focus();
      $(node).addClass('alert');
      setTimeout(function () {
        $(node).removeClass('alert');
      }, 1000);
      return false;
    }
    return true;
  }

  // signwrap send code event handler
  signCodeBtn.click(function () {
    if (!sendingCode) {
      if (emailInputCheck(signUsername[0])) {
        var targetEmail = signUsername[0].value + '@staff.sina.com.cn';
        alert('send verify code to ' + targetEmail);

        var leftSec = 60;
        sendingCode = true;
        changeSignCodeBtnStatus(true);

        sendingTimer = setInterval(function () {
          if (leftSec <= 0) {
            sendingCode = false;
            changeSignCodeBtnStatus(false);
            clearInterval(sendingTimer);
            return;
          }

          signCodeBtn.html('剩余 ' + (--leftSec) + ' 秒');
        }, 1000);
      }
    }
  });

  // signwrap form submit event handler
  signForm.bind('submit', function () {
    if (emailInputCheck(signUsername[0]) && passwordInputCheck(signPassword[0]) && codeInputCheck(signCode[0])) {
      alert('code before submit');
      return true;
    }
    return false;
  });

  // signwrap jump to loginwrap event handler
  signJumpBtn.click(function () {
    loginWrapSwitch.switchTo(1);
  });

  // loginwrap form submit event handler
  loginForm.bind('submit', function () {
    if (emailInputCheck(logUsername[0]) && passwordInputCheck(logPassword[0])) {
      alert('code before submit');
      return true;
    }
    return false;
  });

  // loginwrap jump to signwrap event handler
  logJumpBtn.click(function () {
    loginWrapSwitch.switchTo(0);
  });
});

