defaultPasswordStrengthDefinitions = (function () {
  var flatScore = function (password, regex, bonus) {
    var score = 0, i;
    for (i = 0; i < password.length; i += 1) {
      if (regex.test(password[i])) {
        score = score + bonus;
      }
    }
    return score;
  };

  var conditionalIncrementalScore = function (password, regex, bonus) {
    var score = flatScore(password, regex, bonus);

    if (score === 0) { return 0; }
    return (password.length - score) * 2;
  };

  var passwordSize = function (password) {
    return password.length * 4;
  };
  var containsNumber = function (password) {
    return flatScore(password, /\d/, 4);
  };
  var containsLowercaseLetter = function (password) {
    return conditionalIncrementalScore(password, /[a-z]/, 1);
  };
  var containsUppercaseLetter = function (password) {
    return conditionalIncrementalScore(password, /[A-Z]/, 1);
  };
  var containsSymbols = function (password) {
    return flatScore(password, /\W/, 6);
  };
  var minimumPasswordSize = {
    message: "太短",
    status: "too_short",
    valid: function (password) {
      return password.length > 7;
    }
  };

  var none = { message: "无", status: "none", limit: 0 };
  var weak = { message: "弱，不建议使用", status: "weak", limit: 0.9 };
  var good = { message: "中等，还可以提高", status: "good", limit: 30 };
  var strong = { message: "强,Good!", status: "strong", limit: 60 };
  var veryStrong = { message: "很强，Prefect!", status: "very_strong", limit: 90 };

  return {
    limits: [ none, weak, good, strong, veryStrong ],
    rates: [ passwordSize, containsNumber, containsLowercaseLetter, containsUppercaseLetter, containsSymbols ],
    validations: [ minimumPasswordSize ]
  };
}());