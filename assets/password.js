function testRegex(regex, value, svg) {
  if (regex.test(value)) {
    svg.classList.remove('text-gray-500');
    svg.classList.add('text-green-500');
  } else {
    if (svg.classList.contains('text-green-500')) {
      svg.classList.remove('text-green-500');
      svg.classList.add('text-gray-500');
    }
  }
}

const passwordInput = document.getElementById('password');
const regexLength = /.{8}/;
const regexUppercase = /[A-Z]/;
const regexLowercase = /[a-z]/;
const regexDigit = /[0-9]/;
const regexSpecialChar = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\-]/;
const lengthSVG = document.getElementById('characters-number-svg');
const uppercaseSVG = document.getElementById('uppercase-svg');
const lowercaseSVG = document.getElementById('lowercase-svg');
const digitSVG = document.getElementById('digit-svg');
const specialCharSVG = document.getElementById('special-char-svg');

passwordInput.addEventListener('input', (e) => {
  testRegex(regexLength, e.target.value, lengthSVG);
  testRegex(regexUppercase, e.target.value, uppercaseSVG);
  testRegex(regexLowercase, e.target.value, lowercaseSVG);
  testRegex(regexDigit, e.target.value, digitSVG);
  testRegex(regexSpecialChar, e.target.value, specialCharSVG);
})