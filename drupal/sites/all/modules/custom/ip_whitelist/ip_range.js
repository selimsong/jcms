function IP(a,b) {
  var maxLength = 255;
  var splita = new Array();
  var splitb = new Array();
  var RegEx;
  if (b == '' || !b)
    b = a;
  splita = a.split(".");
  splitb = b.split(".");
  if (splita.length != 4 || splitb.length != 4)
    return "Invalid Ip Address: Must have 4 parts";
  for (var i = 0; i < splita.length; i++) {
    if (splita[i] * 1 < 0 || splita[i] * 1 > 255 || splitb[i] * 1 < 0 || splitb[i] * 1 > 255)
      return "Invalid Ip Address: All parts must be 255 or less";
  }
  for (var j = 0; j < splita.length; j++) {
    if ((splita[j]*1) < (splitb[j]*1) && (splita[j]*1) != (splitb[j]*1))
      break;
    if ((splita[j] * 1) > (splitb[j] * 1) && (splita[j-1]) == (splitb[j-1])) {
      var temp = b
      b = a
      a = temp;
      splita = a.split(".");
      splitb = b.split(".");
      break;
    }
  }
  RegEx = "^" + IPAll(a,b) + "$";
  if (RegEx.length > maxLength)
    return "RegEx too long for filter field, please try another range.";
  else
    return RegEx;
}

function IPAll(a,b) {
  var splita = new Array();
  var splitb = new Array();
  var RegEx = "";
  splita = a.split(".");
  splitb = b.split(".");
  var zeroes = "";
  var twofivefives = "";
  for (var j = 0; j < splita.length - 1; j++) {
    zeroes += "0.";
    twofivefives += "255.";
  }
  zeroes = zeroes.slice(0, zeroes.length - 1);
  twofivefives = twofivefives.slice(0, twofivefives.length - 1);
  if (splita[0] == splitb[0] && splita.length == 1)
    return splita[0];
  else if (splita[0] == splitb[0])
    return splita[0] + "\\." + IPAll(a.slice(a.indexOf(".") + 1, a.length), b.slice(b.indexOf(".") + 1, b.length));
  else if (splita.length == 1)
    return "(" + IPGen(a,b) + ")";
  else if (splita[1] == "0" && splitb[1] == "255")
    return "(" + IPGen(splita[0], splitb[0]) + ")\\." + IPAll(a.slice(a.indexOf(".") + 1, a.length), b.slice(b.indexOf(".") + 1, b.length));
  else if (splita[1] != "0" && splitb[1]!="255" && (splita[1] * 1 + 1) == (splitb[1] *1 )) {
    RegEx += "(" + splita[0] + "\\." + IPAll(a.slice(a.indexOf(".") + 1, a.length), twofivefives);
    RegEx += "|" + splitb[0] + "\\." + IPAll(zeroes, b.slice(b.indexOf(".") + 1, b.length)) + ")";
    return RegEx;
  }
  else if (splita[1] != "0" && splitb[1]!="255") {
    RegEx += "(" + splita[0] + "\\." + IPAll(a.slice(a.indexOf(".") + 1, a.length), twofivefives);
    RegEx += "|(" + IPAll((splita[0] * 1 + 1).toString() + "." + zeroes, (splitb[0] * 1 - 1).toString() + "." + twofivefives) + ")";
    RegEx += "|" + splitb[0] + "\\." + IPAll(zeroes, b.slice(b.indexOf(".") + 1, b.length)) + ")";
    return RegEx;
  }
  else if (splita[1] != "0") {
    RegEx += "(" + splita[0] + "\\." + IPAll(a.slice(a.indexOf(".") + 1, a.length), twofivefives);
    RegEx += "|" + IPAll((splita[0] * 1 + 1).toString() + "." + zeroes, (splitb[0] * 1).toString() + "." + twofivefives) + ")";
    return RegEx;
  }
  else if (splitb[1] != "255") {
    RegEx += "(" + IPAll(splita[0] + "." + zeroes, (splitb[0] * 1 - 1).toString() + "." + twofivefives);
    RegEx += "|" + splitb[0] + "\\." + IPAll(zeroes, b.slice(b.indexOf(".") + 1, b.length)) + ")";
    return RegEx;
  }
}

function IPGen(a,b) {
  if (a*1 > b*1) {
    var temp;
    temp = a;
    a = b;
    b = temp;
  }
  if (a == b) return a;
  else if (a.charAt(0) == b.charAt(0) && a.length == b.length && a.length == 3)
    return a.charAt(0) + "(" + IPGen(a.slice(1, a.length), b.slice(1, b.length)) + ")";
  else if (a.length == b.length && a.length == 3)
    return a.charAt(0) + "(" + IPGen(a.slice(1, a.length), "99") + ")|" + IPGen((a.charAt(0) * 1 + 1).toString() + "00", b);
  else if (b.length == 3)
    return IPGen(a, "99") + "|" + IPGen("100", b);
  else if (a.charAt(0) == b.charAt(0) && a.length == b.length && a.length == 2)
    return a.charAt(0) + range(a.charAt(1), b.charAt(1));
  else if (a.length == b.length && a.charAt(1) == "0" && b.charAt(1) == "9" && a.length == 2)
    return range(a.charAt(0), b.charAt(0)) + range(a.charAt(1), b.charAt(1));
  else if (a.length == b.length && a.charAt(1) != "0" && a.length == 2)
    return IPGen(a, a.charAt(0) + "9") + "|" + IPGen((a.charAt(0) * 1 + 1).toString() + "0", b);
  else if (a.length == b.length && b.charAt(1) != "9" && b.length == 2)
    return IPGen(a, (b.charAt(0) * 1 - 1).toString() + "9") + "|" + IPGen(b.charAt(0) + "0", b);
  else if (a.length == 1 && b.length==1)
    return range(a, b);
  else if (a.length == 1)
    return range(a, "9") + "|" + IPGen("10", b);
}

function range(a, b) {
  return "[" + a + "-" + b + "]";
}

function updateIPRegex() {
  jQuery('#edit-pattern').val(IP(jQuery('#edit-first').val(), jQuery('#edit-last').val()))
}


Drupal.behaviors.ipPatternGenerator = {
  attach: function(context) {
    updateIPRegex();
    jQuery('#edit-first, #edit-last, #edit-pattern').change(function() {
      updateIPRegex();
    });
  },
  detach: function(context) {

  }
};

