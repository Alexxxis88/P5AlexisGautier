// ------------------------------------- //
// --- Internet Explorer disclaimer ---- //
// ------------------------------------- //

const isIE = window.navigator.msPointerEnabled; // Internet Explorer/Edge ≥ 10
const isIEless = /*@cc_on!@*/false; // Internet Explorer/Edge ≤ 10

if(isIE || isIEless ){
    alert("Some features of this website are not working with Internet Explorer." +
        "\n" +
        "\n Please use another browser such as Chrome, FireFox, Opera or Edge.")
}