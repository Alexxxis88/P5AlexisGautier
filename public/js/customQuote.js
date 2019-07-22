//Get services array 
function fillArray() {
    
    let arrayId = [];

    let siteTypeId = document.getElementById("siteType").value;
    let designID = document.getElementById("design").value;
    let writingContentId = document.getElementById("writingContent").value;
    let visualContentId = document.getElementById("visualContent").value;
    let maintenanceId = document.getElementById("maintenance").value;
    let hostId = document.getElementById("host").value;
    let deadlineSelectId = document.getElementById("deadlineSelect").value;
    let pageNbId = document.getElementById("pageNb").value;
    let loginShowcaseYNId = document.getElementById("loginShowcaseYN").value;
    let productNbId = document.getElementById("productNb").value;

    //set a default value ( = 0 ) for options that are displayed or not depending on siteType chosen
    if( pageNbId == ""){
        pageNbId = "- 10 pages"
    }

    if( loginShowcaseYNId == ""){
        loginShowcaseYNId = "No Login"
    }

    if( productNbId == ""){
        productNbId = "- 10 products"
    }

    //get select inputs services
    arrayId.push(siteTypeId, designID, writingContentId, visualContentId, maintenanceId, hostId, deadlineSelectId, pageNbId, loginShowcaseYNId, productNbId);

    //get checkboxes inputs services
    $("input:checkbox:checked").each(function () {
        arrayId.push($(this).val());
    });

    //fill the array
    document.getElementById("arrayServices").value = arrayId;
    // console.log( arrayId); FIXMECUSTOM remove me
};



//Display total price
let grandTotal = "";
let totalInput = "";
let totalCheckboxe = "";

//get the total of all SELECT inputs
function getSelectValue() {
    let siteType = document.getElementById("siteType").value;
    switch (siteType) {
    case "Showcase Website":
        siteType = 500;
        break;
    case "Webstore":
        siteType = 800;
        break;
    case "Showcase Website + Webstore":
        siteType = 1000;
        break;
    case "Redesign - Showcase Website":
        siteType = 300;
        break;
    case "Redesign - Webstore":
        siteType = 300;
        break;
    case "Redesign - Showcase Website + Webstore":
        siteType = 300;
        break;
    default:
        siteType = 0;
    }

    let design = document.getElementById("design").value;
    switch (design) {
    case "Standard Design":
        design = 100;
        break;
    case "Custom Design":
        design = 50;
        break;
    case "Custom + Design":
        design = 500;
        break;
    default:
        design = 0;
    }

    let writingContent = document.getElementById("writingContent").value;
    switch (writingContent) {
    case "YesWriting":
        writingContent = 200;
        break;
    case "NoWriting":
        writingContent = 0;
        break;
    default:
        writingContent = 0;
    }

    let visualContent = document.getElementById("visualContent").value;
    switch (visualContent) {
    case "YesVisual":
        visualContent = 100;
        break;
    case "NoVisual":
        visualContent = 0;
        break;
    default:
        visualContent = 0;
    }

    let maintenance = document.getElementById("maintenance").value;
    switch (maintenance) {
    case "No Maintenance":
        maintenance = 0;
        break;
    case "Minimal Maintenance":
        maintenance = 100;
        break;
    case "Regular Maintenance":
        maintenance = 200;
        break;
    case "Premium Maintenance":
        maintenance = 400;
        break;
    case "Gold Maintenance":
        maintenance = 1500;
        break;
    default:
        maintenance = 0;
    }

    let host = document.getElementById("host").value;
    switch (host) {
    case "No Host":
        host = 0;
        break;
    case "Standard Host":
        host = 50;
        break;
    case "Premium Host":
        host = 100;
        break;
    default:
        host = 0;
    }

    let deadlineSelect = document.getElementById("deadlineSelect").value;
    switch (deadlineSelect) {
    case "No Deadline":
        deadlineSelect = 0;
        break;
    case "Express +":
        deadlineSelect = 1000;
        break;
    case "Express":
        deadlineSelect = 800;
        break;
    case "Fast":
        deadlineSelect = 400;
        break;
    case "Regular":
        deadlineSelect = 50;
        break;
    case "Slow":
        deadlineSelect = 0;
        break;
    default:
        deadlineSelect = 0;
    }

    let pageNb = document.getElementById("pageNb").value;
    switch (pageNb) {
    case "- 10 pages":
        pageNb = 0;
        break;
    case "10 - 50 pages":
        pageNb = 20;
        break;
    case "50 - 100 pages":
        pageNb = 30;
        break;
    case "100 - 200 pages":
        pageNb = 40;
        break;
    case "200 - 500 pages":
        pageNb = 50;
        break;
    case "+ 500 pages":
        pageNb = 60;
        break;
    default:
        pageNb = 0;
    }

    let loginShowcaseYN = document.getElementById("loginShowcaseYN").value;
    switch (loginShowcaseYN) {
    case "Yes Login":
        loginShowcaseYN = 100;
        break;
    case "No Login":
        loginShowcaseYN = 0;
        break;
    default:
        loginShowcaseYN = 0;
    }

    let productNb = document.getElementById("productNb").value;
    switch (productNb) {
    case "- 10 products":
        productNb = 0;
        break;
    case "10 - 100 products":
        productNb = 20;
        break;
    case "100 - 200 products":
        productNb = 30;
        break;
    case "200 - 500 products":
        productNb = 40;
        break;
    case "+ 500 products":
        productNb = 50;
        break;
    default:
        productNb = 0;
    }


    totalInput = Number(siteType + design + writingContent + visualContent + maintenance + host + deadlineSelect +
        pageNb + loginShowcaseYN + productNb);
};


//Checkbox values need to be redefine for JS only to display correct price : it has to be .text() and not .val() otherwise the value taken by PHP / MYSQL will be the wrong one

    //Options
    $("#blogOpt").text("200");
    $("#chatOpt").text("150");
    $("#contactFormOpt").text("150");
    $("#newsletterOpt").text("70");
    $("#appointOpt").text("150");
    $("#searchOpt").text("150");
    $("#quoteOpt").text("150");
    $("#invoiceOpt").text("150");
    $("#socialOpt").text("150");
    $("#statsOpt").text("150");
    $("#calendarOpt").text("150");
    $("#newsOpt").text("150");
    $("#adminPannelOpt").text("150");
    $("#ratingsOpt").text("150");
    $("#surveyOpt").text("150");

    //Languages
    $("#french").text("0");
    $("#english").text("50");
    $("#bulgarian").text("100");
    $("#croatian").text("100");
    $("#czech").text("100");
    $("#danish").text("100");
    $("#dutch").text("100");
    $("#estonian").text("100");
    $("#finnish").text("100");
    $("#german").text("100");
    $("#greek").text("100");
    $("#hungarian").text("100");
    $("#italian").text("100");
    $("#latvian").text("100");
    $("#lithuanian").text("100");
    $("#norwegian").text("100");
    $("#portuguese").text("100");
    $("#russian").text("100");
    $("#serbian").text("100");
    $("#slovak").text("100");
    $("#slovene").text("100");
    $("#spanish").text("100");
    $("#swedish").text("100");
    $("#swissGerman").text("100");

    //Extensions
    $("#dotCom").text("20");
    $("#dotFr").text("10");
    $("#dotUk").text("10");
    $("#dotDe").text("10");

    //Payment Methods Showcase
    $("#2CheckoutShow").text("50");
    $("#authorizeShow").text("50");
    $("#amazonShow").text("50");
    $("#bankWireShow").text("50");
    $("#checkShow").text("50");
    $("#creditCardPPShow").text("50");
    $("#creditCardBkShow").text("50");
    $("#paypalShow").text("50");
    $("#paypalProShow").text("50");
    $("#sagePayShow").text("50");
    $("#skrillShow").text("50");
    $("#squareShow").text("50");
    $("#stripeShow").text("50");

    //Payment Methods Store
    $("#2CheckoutStore").text("50");
    $("#authorizeStore").text("50");
    $("#amazonStore").text("50");
    $("#bankWireStore").text("50");
    $("#checkStore").text("50");
    $("#creditCardPPStore").text("50");
    $("#creditCardBkStore").text("50");
    $("#paypalStore").text("50");
    $("#paypalProStore").text("50");
    $("#sagePayStore").text("50");
    $("#skrillStore").text("50");
    $("#squareStore").text("50");
    $("#stripeStore").text("50");




//get the total of all CHECKBOXES inputs
$(".checkBoxValue").change(function () {
    let checkboxes = [];
    $("input:checkbox:checked").each(function () {
        checkboxes.push($(this).text());
    });
    totalCheckboxe = 0;
    for (i = 0; i < checkboxes.length; i++) {
        totalCheckboxe = Number(totalCheckboxe += parseInt(checkboxes[i]));
    }
});

//display the grand total //FIXME : use Jquerry to factor the function
function getTotal() {
    grandTotal = totalInput + totalCheckboxe;
    document.getElementById("text-customQuote").innerHTML = grandTotal + " € ";
    document.getElementById("text-customQuoteWidget").innerHTML = grandTotal + " € ";
    // document.getElementById("price").value = grandTotal; FIXME : remove me car je ne me sers pas du champ price
}


//deselect all options choices when Website Type is changed
function deselectAll(){

    //deselect inputs
    $("#design option:selected").prop("selected", false);
    $("#writingContent option:selected").prop("selected", false);
    $("#visualContent option:selected").prop("selected", false);
    $("#maintenance option:selected").prop("selected", false);
    $("#host option:selected").prop("selected", false);
    $("#domainYN option:selected").prop("selected", false);
    $("#deadlineSelect option:selected").prop("selected", false);
    $("#deadline").val("");
    $("#pageNb option:selected").prop("selected", false);
    $("#loginShowcaseYN option:selected").prop("selected", false);
    $("#paymentShowcaseYN option:selected").prop("selected", false);
    $("#productNb option:selected").prop("selected", false);

    //reset dropdown option menu placeholder
    $(".menuPlaceholder").html("Please select <span class='caret'></span>")

    //hide elements
    document.getElementById("extensionBlock").style.display = "none";
    document.getElementById("deadlineBlock").style.display = "none";
    document.getElementById("paymentMethShowcase").style.display = "none";
    document.getElementById("langAlert").style.display = "block";
    document.getElementById("extensionAlert").style.display = "none";
    document.getElementById("payShowAlert").style.display = "none";

    $('#customSubmitBtn').prop( "disabled", true );

    //deselect checkboxes
    $("#french, #english, #bulgarian, #croatian, #czech, #danish, #dutch, #estonian, #finnish, #german, #greek, #hungarian, #italian, #latvian, #lithuanian, #norwegian, #portuguese, #russian, #serbian, #slovak, #slovene, #spanish, #swedish, #swissGerman, #dotCom, #dotFr, #dotUk, #dotDe, #blogOpt, #chatOpt, #contactFormOpt, #newsletterOpt, #appointOpt, #searchOpt, #quoteOpt, #invoiceOpt, #socialOpt, #statsOpt, #calendarOpt, #newsOpt, #adminPannelOpt, #ratingsOpt, #surveyOpt, #2CheckoutShow, #authorizeShow, #amazonShow, #bankWireShow, #checkShow, #creditCardPPShow, #creditCardBkShow, #paypalShow, #paypalProShow, #sagePayShow, #skrillShow, #squareShow, #stripeShow, #2CheckoutStore, #authorizeStore, #amazonStore, #bankWireStore, #checkStore, #creditCardPPStore, #creditCardBkStore, #paypalStore, #paypalProStore, #sagePayStore, #skrillStore, #squareStore, #stripeStore ").prop( "checked", false );


    let siteType = document.getElementById("siteType").value;
    switch (siteType) {
    case "Showcase Website":
        siteType = 500;
        break;
    case "Webstore":
        siteType = 800;
        break;
    case "Showcase Website + Webstore":
        siteType = 1000;
        break;
    case "Redesign - Showcase Website":
        siteType = 300;
        break;
    case "Redesign - Webstore":
        siteType = 300;
        break;
    case "Redesign - Showcase Website + Webstore":
        siteType = 300;
        break;
    default:
        siteType = 0;
    }

    //reset price display
    document.getElementById("text-customQuote").innerHTML = siteType + " € ";
    document.getElementById("text-customQuoteWidget").innerHTML = siteType + " € ";
    // document.getElementById("price").value = siteType; FIXME : remove me car je ne me sers pas du champ price

    //empty arrayService
    document.getElementById("arrayServices").value = "";
}


//FIXME : factoriser les changements d'affichage avec jquerry pour regrouper les display none / block
//display / hide Payment options for Showcase website
function myFunction2() {
    let paymentShowcaseYN = document.getElementById("paymentShowcaseYN").value;
    if (paymentShowcaseYN == "Yes") {
        document.getElementById("paymentMethShowcase").style.display = "block";
        document.getElementById("payShowAlert").style.display = "block";
        $('#customSubmitBtn').prop( "disabled", true );
    } else if (paymentShowcaseYN == "No") {
        document.getElementById("paymentMethShowcase").style.display = "none";
        document.getElementById("payShowAlert").style.display = "none";
        $('#customSubmitBtn').prop( "disabled", false );
    }
}

//display / hide calendar for deadline
function myFunction3() {
    let deadlineSelect = document.getElementById("deadlineSelect").value;
    if (deadlineSelect == "No Deadline") {
        document.getElementById("deadlineBlock").style.display = "none";
        document.getElementById("deadline").required = false;

    } else {
        document.getElementById("deadlineBlock").style.display = "block";
        document.getElementById("deadline").required = true;
    }
}


//display / hide extensions list for Showcase website
function myFunction5() {
    let domainYN = document.getElementById("domainYN").value;
    if (domainYN == "Yes") {
        document.getElementById("extensionBlock").style.display = "block";
        document.getElementById("extensionAlert").style.display = "block";
        $('#customSubmitBtn').prop( "disabled", true );
    } else if (domainYN == "No") {
        document.getElementById("extensionBlock").style.display = "none";
        document.getElementById("extensionAlert").style.display = "none";
        $('#customSubmitBtn').prop( "disabled", false );
    }
}

//display / hide Showcase website / Webstore sections
function myFunction4() {
    let siteTypeDisplay = document.getElementById("siteType")
        .value; //FIXME, pourquoi ça ne marche pas avec innerHTML ? tester en Jquery?
    if (siteTypeDisplay == "Showcase Website" || siteTypeDisplay == "Redesign - Showcase Website") {
        document.getElementById("showcaseSection").style.display = "block";
        document.getElementById("webstoreSection").style.display = "none";
        document.getElementById("payStoreAlert").style.display = "none";

    } else if (siteTypeDisplay == "Webstore" || siteTypeDisplay == "Redesign - Webstore" ) {
        document.getElementById("showcaseSection").style.display = "none";
        document.getElementById("webstoreSection").style.display = "block";
        document.getElementById("payStoreAlert").style.display = "block";
        $('#customSubmitBtn').prop( "disabled", true );

    } else if (siteTypeDisplay == "Showcase Website + Webstore" || siteTypeDisplay == "Redesign - Showcase Website + Webstore") {
        document.getElementById("showcaseSection").style.display = "block";
        document.getElementById("webstoreSection").style.display = "block";
        document.getElementById("payStoreAlert").style.display = "block";
        $('#customSubmitBtn').prop( "disabled", true );

    } else {
        document.getElementById("showcaseSection").style.display = "none";
        document.getElementById("webstoreSection").style.display = "none";
    }
}


//display / hide the customQuote Price widget
$(window).scroll(function() {
    if ($(this).scrollTop()>1800)
    {
        $("#customQuoteWidget").fadeOut("fast");
    }
    else
    {
    $("#customQuoteWidget").fadeIn("fast");
    }
});



//CHECKBOX counters
//Language
let countLanguage = 0;
let countLanguageChecked = function() {
    countLanguage = $( ".languagecheck:checked" ).length;
};

$( ".languagecheck" ).on( "click", countLanguageChecked );

//Alert if no language selected when submitting the form

function alertLanguage(){
    if(countLanguage < 1){
        $('#customSubmitBtn').prop( "disabled", true );
        $('#langAlert').css( "display", "block" );
    }
    else {
        $('#customSubmitBtn').prop( "disabled", false );
        $('#langAlert').css( "display", "none" );
    }
}
$( ".languagecheck" ).on( "click", alertLanguage );




//Extension
let countExtension = 0;
let countExtensionChecked = function() {
    countExtension = $( ".extensioncheck:checked" ).length;
};

$( ".extensioncheck" ).on( "click", countExtensionChecked );

//Alert if no extension selected (if displayed) when submitting the form

function alertExtention(){
    if( ($("#extensionBlock").css("display") == "block") &&  countExtension < 1){
        $('#customSubmitBtn').prop( "disabled", true );
        $('#extensionAlert').css( "display", "block" );
    }
    else {
        $('#customSubmitBtn').prop( "disabled", false );
        $('#extensionAlert').css( "display", "none" );
    }
}
$( ".extensioncheck" ).on( "click", alertExtention );



//Payment methods (Showcase)
let countPayShow = 0;
let countPayShowChecked = function() {
    countPayShow = $( ".payShowcheck:checked" ).length;
};

$( ".payShowcheck" ).on( "click", countPayShowChecked );



//Alert if no Payment methods (Showcase) selected (if displayed) when submitting the form

function alertPayShow(){
    if( ($("#paymentMethShowcase").css("display") == "block") &&  countPayShow < 1){
        $('#customSubmitBtn').prop( "disabled", true );
        $('#payShowAlert').css( "display", "block" );
    }
    else {
        $('#customSubmitBtn').prop( "disabled", false );
        $('#payShowAlert').css( "display", "none" );
    }
}
$( ".payShowcheck" ).on( "click", alertPayShow );



//Payment methods (Webstore)
let countPayStore = 0;
let countPayStoreChecked = function() {
    countPayStore = $( ".payStorecheck:checked" ).length;
};

$( ".payStorecheck" ).on( "click", countPayStoreChecked );


//Alert if no Payment methods (Store) selected (if displayed) when submitting the form
function alertPayStore(){
    if( ($("#paymentMethStore").is(":visible") == true) &&  countPayStore < 1){
        $('#customSubmitBtn').prop( "disabled", true );
        $('#payStoreAlert').css( "display", "block" );
    }
    else {
        $('#customSubmitBtn').prop( "disabled", false );
        $('#payStoreAlert').css( "display", "none" );
    }
}
$( ".payStorecheck" ).on( "click", alertPayStore );




