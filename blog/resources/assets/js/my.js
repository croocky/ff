
$.ajax({
  url: "https://api.coindesk.com/v1/bpi/currentprice.json"
}).done(function(data) {
    var jsondata = JSON.parse(data);
    var pound = jsondata.bpi.GBP.symbol+jsondata.bpi.GBP.rate_float;
    var euro = jsondata.bpi.EUR.symbol+jsondata.bpi.EUR.rate_float;
    var dollar = jsondata.bpi.USD.symbol+jsondata.bpi.USD.rate_float;
    $('.chart').append('<i class="chart__item chart__item_lable">Bitcoin Price Index (BPI)</i><i class="chart__item">'+pound+'</i><i class="chart__item">'+euro+'</i><i class="chart__item">'+dollar+'</i>')
});

$(function() {

    var marquee = $(".chart");
    marquee.css({"overflow": "hidden", "width": "100%"});

    // оболочка для текста ввиде span (IE не любит дивы с inline-block)
    marquee.wrapInner("<span>");
    marquee.find("span").css({ "width": "50%", "display": "inline-block", "text-align":"center" });
    marquee.append(marquee.find("span").clone()); // тут у нас два span с текстом

    marquee.wrapInner("<div>");
    marquee.find("div").css("width", "200%");

    var reset = function() {
        $(this).css("margin-left", "0%");
        $(this).animate({ "margin-left": "-100%" }, 12000, 'linear', reset);
    };

    reset.call(marquee.find("div"));

});
