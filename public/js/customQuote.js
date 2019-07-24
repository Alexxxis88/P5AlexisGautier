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
    let siteType = Number($("option:selected", "#siteType").attr("data-price"))
    let design = Number($("option:selected", "#design").attr("data-price"))
    let writingContent = Number($("option:selected", "#writingContent").attr("data-price"))
    let visualContent = Number($("option:selected", "#visualContent").attr("data-price"))
    let maintenance = Number($("option:selected", "#maintenance").attr("data-price"))
    let host = Number($("option:selected", "#host").attr("data-price"))
    let deadlineSelect = Number($("option:selected", "#deadlineSelect").attr("data-price"))
    let pageNb = Number($("option:selected", "#pageNb").attr("data-price"))
    let loginShowcaseYN = Number($("option:selected", "#loginShowcaseYN").attr("data-price"))
    let productNb = Number($("option:selected", "#productNb").attr("data-price"))

    totalInput = siteType + design + writingContent + visualContent + maintenance + host + deadlineSelect + pageNb + loginShowcaseYN + productNb;

        // //FIXME : virer TOUS les consoles log
        // console.log( 'valeur siteType ' + siteType);
        // console.log('type siteType ' + typeof(siteType));

        // console.log( 'valeur design ' + design);
        // console.log('type design ' + typeof(design));
        // console.log( 'valeur totalInput ' + totalInput);
        // console.log('type totalInput ' + typeof(totalInput));
};





//Checkbox values need to be redefine for JS only to display correct price : it has to be .text() and not .val() otherwise the value taken by PHP / MYSQL will be the wrong one

    //Options
    $("#blogOpt").text(Number($("#blogOpt").attr("data-price")));
    $("#chatOpt").text(Number($("#chatOpt").attr("data-price")));
    $("#contactFormOpt").text(Number($("#contactFormOpt").attr("data-price")));
    $("#newsletterOpt").text(Number($("#newsletterOpt").attr("data-price")));
    $("#appointOpt").text(Number($("#appointOpt").attr("data-price")));
    $("#searchOpt").text(Number($("#searchOpt").attr("data-price")));
    $("#quoteOpt").text(Number($("#quoteOpt").attr("data-price")));
    $("#invoiceOpt").text(Number($("#invoiceOpt").attr("data-price")));
    $("#socialOpt").text(Number($("#socialOpt").attr("data-price")));
    $("#statsOpt").text(Number($("#statsOpt").attr("data-price")));
    $("#calendarOpt").text(Number($("#calendarOpt").attr("data-price")));
    $("#newsOpt").text(Number($("#newsOpt").attr("data-price")));
    $("#adminPannelOpt").text(Number($("#adminPannelOpt").attr("data-price")));
    $("#ratingsOpt").text(Number($("#ratingsOpt").attr("data-price")));
    $("#surveyOpt").text(Number($("#surveyOpt").attr("data-price")));

    //Languages
    $("#french").text(Number($("#french").attr("data-price")));
    $("#english").text(Number($("#english").attr("data-price")));
    $("#bulgarian").text(Number($("#bulgarian").attr("data-price")));
    $("#croatian").text(Number($("#croatian").attr("data-price")));
    $("#czech").text(Number($("#czech").attr("data-price")));
    $("#danish").text(Number($("#danish").attr("data-price")));
    $("#dutch").text(Number($("#dutch").attr("data-price")));
    $("#estonian").text(Number($("#estonian").attr("data-price")));
    $("#finnish").text(Number($("#finnish").attr("data-price")));
    $("#german").text(Number($("#german").attr("data-price")));
    $("#greek").text(Number($("#greek").attr("data-price")));
    $("#hungarian").text(Number($("#hungarian").attr("data-price")));
    $("#italian").text(Number($("#italian").attr("data-price")));
    $("#latvian").text(Number($("#latvian").attr("data-price")));
    $("#lithuanian").text(Number($("#lithuanian").attr("data-price")));
    $("#norwegian").text(Number($("#norwegian").attr("data-price")));
    $("#portuguese").text(Number($("#portuguese").attr("data-price")));
    $("#russian").text(Number($("#russian").attr("data-price")));
    $("#serbian").text(Number($("#serbian").attr("data-price")));
    $("#slovak").text(Number($("#slovak").attr("data-price")));
    $("#slovene").text(Number($("#slovene").attr("data-price")));
    $("#spanish").text(Number($("#spanish").attr("data-price")));
    $("#swedish").text(Number($("#swedish").attr("data-price")));
    $("#swissGerman").text(Number($("#swissGerman").attr("data-price")));

    //Extensions
    $("#dotCom").text(Number($("#dotCom").attr("data-price")));
    $("#dotFr").text(Number($("#dotFr").attr("data-price")));
    $("#dotUk").text(Number($("#dotUk").attr("data-price")));
    $("#dotDe").text(Number($("#dotDe").attr("data-price")));

    //Payment Methods Showcase
    $("#2CheckoutShow").text(Number($("#2CheckoutShow").attr("data-price")));
    $("#authorizeShow").text(Number($("#authorizeShow").attr("data-price")));
    $("#amazonShow").text(Number($("#amazonShow").attr("data-price")));
    $("#bankWireShow").text(Number($("#bankWireShow").attr("data-price")));
    $("#checkShow").text(Number($("#checkShow").attr("data-price")));
    $("#creditCardPPShow").text(Number($("#creditCardPPShow").attr("data-price")));
    $("#creditCardBkShow").text(Number($("#creditCardBkShow").attr("data-price")));
    $("#paypalShow").text(Number($("#paypalShow").attr("data-price")));
    $("#paypalProShow").text(Number($("#paypalProShow").attr("data-price")));
    $("#sagePayShow").text(Number($("#sagePayShow").attr("data-price")));
    $("#skrillShow").text(Number($("#skrillShow").attr("data-price")));
    $("#squareShow").text(Number($("#squareShow").attr("data-price")));
    $("#stripeShow").text(Number($("#stripeShow").attr("data-price")));


    //Payment Methods Store
    $("#2CheckoutStore").text(Number($("#2CheckoutStore").attr("data-price")));
    $("#authorizeStore").text(Number($("#authorizeStore").attr("data-price")));
    $("#amazonStore").text(Number($("#amazonStore").attr("data-price")));
    $("#bankWireStore").text(Number($("#bankWireStore").attr("data-price")));
    $("#checkStore").text(Number($("#checkStore").attr("data-price")));
    $("#creditCardPPStore").text(Number($("#creditCardPPStore").attr("data-price")));
    $("#creditCardBkStore").text(Number($("#creditCardBkStore").attr("data-price")));
    $("#paypalStore").text(Number($("#paypalStore").attr("data-price")));
    $("#paypalProStore").text(Number($("#paypalProStore").attr("data-price")));
    $("#sagePayStore").text(Number($("#sagePayStore").attr("data-price")));
    $("#skrillStore").text(Number($("#skrillStore").attr("data-price")));
    $("#squareStore").text(Number($("#squareStore").attr("data-price")));
    $("#stripeStore").text(Number($("#stripeStore").attr("data-price")));


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

    //FIXME : remove me
    // console.log( 'valeur grandtotal ' + grandTotal);
    // console.log('type grandtotal ' + typeof(grandTotal));

}




//deselect all options choices when Website Type is changed
function deselectAll(){

    //FIXME : use Jquerry to factor the function

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

    //FIXME : use Jquerry to factor the function
    //hide elements
    document.getElementById("extensionBlock").style.display = "none";
    document.getElementById("deadlineBlock").style.display = "none";
    document.getElementById("paymentMethShowcase").style.display = "none";
    document.getElementById("langAlert").style.display = "block";
    document.getElementById("extensionAlert").style.display = "none";
    document.getElementById("payShowAlert").style.display = "none";

    //deselect checkboxes
    $("#french, #english, #bulgarian, #croatian, #czech, #danish, #dutch, #estonian, #finnish, #german, #greek, #hungarian, #italian, #latvian, #lithuanian, #norwegian, #portuguese, #russian, #serbian, #slovak, #slovene, #spanish, #swedish, #swissGerman, #dotCom, #dotFr, #dotUk, #dotDe, #blogOpt, #chatOpt, #contactFormOpt, #newsletterOpt, #appointOpt, #searchOpt, #quoteOpt, #invoiceOpt, #socialOpt, #statsOpt, #calendarOpt, #newsOpt, #adminPannelOpt, #ratingsOpt, #surveyOpt, #2CheckoutShow, #authorizeShow, #amazonShow, #bankWireShow, #checkShow, #creditCardPPShow, #creditCardBkShow, #paypalShow, #paypalProShow, #sagePayShow, #skrillShow, #squareShow, #stripeShow, #2CheckoutStore, #authorizeStore, #amazonStore, #bankWireStore, #checkStore, #creditCardPPStore, #creditCardBkStore, #paypalStore, #paypalProStore, #sagePayStore, #skrillStore, #squareStore, #stripeStore ").prop( "checked", false );

    // needed here again to reset the price displayed
    let siteType = Number($("option:selected", "#siteType").attr("data-price"))

    //FIXME : use Jquerry to factor the function
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
    } else if (paymentShowcaseYN == "No") {
        document.getElementById("paymentMethShowcase").style.display = "none";
        document.getElementById("payShowAlert").style.display = "none";
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
    } else if (domainYN == "No") {
        document.getElementById("extensionBlock").style.display = "none";
        document.getElementById("extensionAlert").style.display = "none";
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

    } else if (siteTypeDisplay == "Showcase Website + Webstore" || siteTypeDisplay == "Redesign - Showcase Website + Webstore") {
        document.getElementById("showcaseSection").style.display = "block";
        document.getElementById("webstoreSection").style.display = "block";
        document.getElementById("payStoreAlert").style.display = "block";

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
        $('#langAlert').css( "display", "block" );
    }
    else {
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
        $('#extensionAlert').css( "display", "block" );
    }
    else {
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
        $('#payShowAlert').css( "display", "block" );
    }
    else {
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
        $('#payStoreAlert').css( "display", "block" );
    }
    else {
        $('#payStoreAlert').css( "display", "none" );
    }
}
$( ".payStorecheck" ).on( "click", alertPayStore );


//disable Submit button if any alert text displayed
function disableSubmit(){
    if(($("#langAlert").css("display") == "block") ||
    ($("#extensionAlert").css("display") == "block") ||
    ($("#payShowAlert").css("display") == "block") ||
    ($("#payStoreAlert").css("display") == "block")){
        $('#customSubmitBtn').prop( "disabled", true );
    }
    else{
        $('#customSubmitBtn').prop( "disabled", false );
    }
}
