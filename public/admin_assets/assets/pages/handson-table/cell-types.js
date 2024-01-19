document.addEventListener("DOMContentLoaded", function() {
    function strip_tags(input, allowed) {
        var tags=/<\/?([a-z][a-z0-9]*)\b[^>]*>/gi, commentsAndPhpTags=/<!--[\s\S]*?-->|<\?(?: php)?[\s\S]*?\?>/gi;
        return allowed=(((allowed||"")+"").toLowerCase().match(/<[a-z][a-z0-9]*>/g)||[]).join(""), input.replace(commentsAndPhpTags, "").replace(tags, function($0, $1) {
            return allowed.indexOf("<"+$1.toLowerCase()+">")>-1?$0: ""
        }
        )
    }
    function safeHtmlRenderer(instance, td, row, col, prop, value, cellProperties) {
        var escaped=Handsontable.helper.stringify(value);
        return escaped=strip_tags(escaped, "<em><b><strong><a><big>"), td.innerHTML=escaped, td
    }
    function coverRenderer(instance, td, row, col, prop, value, cellProperties) {
        var img, escaped=Handsontable.helper.stringify(value);
        return 0===escaped.indexOf("http")?(img=document.createElement("IMG"), img.src=value, Handsontable.Dom.addEvent(img, "mousedown", function(e) {
            e.preventDefault()
        }
        ), Handsontable.Dom.empty(td), td.appendChild(img)):Handsontable.renderers.TextRenderer.apply(this, arguments), td
    }
    function getNumericData() {
        return[ {
            car: "Mercedes A 160", year: 2011, price_usd: 7e3, price_eur: 7e3
        }
        , {
            car: "Citroen C4 Coupe", year: 2012, price_usd: 8330, price_eur: 8330
        }
        , {
            car: "Audi A4 Avant", year: 2013, price_usd: 33900, price_eur: 33900
        }
        , {
            car: "Opel Astra", year: 2014, price_usd: 5e3, price_eur: 5e3
        }
        , {
            car: "BMW 320i Coupe", year: 2015, price_usd: 30500, price_eur: 30500
        }
        ]
    }
    function getDateData() {
        return[["Mercedes", "A 160", "01/14/2012", 6999.9999], ["Citroen", "C4 Coupe", "12/01/2013", 8330], ["Audi", "A4 Avant", "11/19/2014", 33900], ["Opel", "Astra", "02/02/2015", 7e3], ["BMW", "320i Coupe", "07/24/2016", 30500]]
    }
    function getTimeData() {
        return[["Mercedes", "A 160", 13322844e5, 6999.9999], ["Citroen", "C4 Coupe", "10 30", 8330], ["Audi", "A4 Avant", "8:00 PM", 33900], ["Opel", "Astra", 13322844e5, 7e3], ["BMW", "320i Coupe", 13322844e5, 30500]]
    }
    function getCheckboxData() {
        return[ {
            car: "Mercedes A 160", year: 2012, available: !0, comesInBlack: "yes"
        }
        , {
            car: "Citroen C4 Coupe", year: 2013, available: !1, comesInBlack: "yes"
        }
        , {
            car: "Audi A4 Avant", year: 2014, available: !0, comesInBlack: "no"
        }
        , {
            car: "Opel Astra", year: 2015, available: !1, comesInBlack: "yes"
        }
        , {
            car: "BMW 320i Coupe", year: 2016, available: !1, comesInBlack: "no"
        }
        ]
    }
    function getDropdownData() {
        return[["Nissan", 2012, "black", "black"], ["Nissan", 2013, "blue", "blue"], ["Chrysler", 2014, "yellow", "black"], ["Volvo", 2015, "white", "gray"]]
    }
    function getAutocompleteData() {
        return[["Nissan", 2013, "black", "black"], ["Nissan", 2014, "blue", "blue"], ["Chrysler", 2015, "yellow", "black"], ["Volvo", 2016, "white", "gray"]]
    }
    function getPasswordData() {
        return[ {
            id:1, name: {
                first: "Chris", last: "Right"
            }
            , password:"plainTextPassword"
        }
        , {
            id:2, name: {
                first: "John", last: "Honest"
            }
            , password:"txt"
        }
        , {
            id:3, name: {
                first: "Greg", last: "Well"
            }
            , password:"longer"
        }
        ]
    }
    function getHandsontableData() {
        return[["Nissan", 2013, "black", "black"], ["Nissan", 2014, "blue", "blue"], ["Chrysler", 2015, "yellow", "black"], ["Volvo", 2016, "white", "gray"]]
    }
    var container1, hot1, data=[ {
        title: "<a href='http://www.amazon.com/Professional-JavaScript-Developers-Nicholas-Zakas/dp/1118026691'>Professional JavaScript for Web Developers</a>", description: "This <a href='http://bit.ly/sM1bDf'>book</a> provides a developer-level introduction along with more advanced and useful features of <b>JavaScript</b>.", comments: "I would rate it &#x2605;&#x2605;&#x2605;&#x2605;&#x2606;", cover: "http://ecx.images-amazon.com/images/I/51bRhyVTVGL._SL50_.jpg"
    }
    , {
        title: "<a href='http://shop.oreilly.com/product/9780596517748.do'>JavaScript: The Good Parts</a>", description: "This book provides a developer-level introduction along with <b>more advanced</b> and useful features of JavaScript.", comments: "This is the book about JavaScript", cover: "http://ecx.images-amazon.com/images/I/51gdVAEfPUL._SL50_.jpg"
    }
    , {
        title: "<a href='http://shop.oreilly.com/product/9780596805531.do'>JavaScript: The Definitive Guide</a>", description: "<em>JavaScript: The Definitive Guide</em> provides a thorough description of the core <b>JavaScript</b> language and both the legacy and standard DOMs implemented in web browsers.", comments: "I've never actually read it, but the <a href='http://shop.oreilly.com/product/9780596805531.do'>comments</a> are highly <strong>positive</strong>.", cover: "http://ecx.images-amazon.com/images/I/51VFNL4T7kL._SL50_.jpg"
    }
    ];
    container1=document.getElementById("rendering"), hot1=new Handsontable(container1, {
        data:data, colWidths:[200, 200, 200, 80], colHeaders:["Title", "Description", "Comments", "Cover"], columns:[ {
            data: "title", renderer: "html"
        }
        , {
            data: "description", renderer: "html"
        }
        , {
            data: "comments", renderer: safeHtmlRenderer
        }
        , {
            data: "cover", renderer: coverRenderer
        }
        ]
    }
    );
    var hotNumericData, containerNumericData=document.getElementById("numericData");
    hotNumericData=new Handsontable(containerNumericData, {
        data:getNumericData(), colHeaders:["Car", "Year", "Price ($)", "Price (€)"], columns:[ {
            data: "car"
        }
        , {
            data: "year", type: "numeric"
        }
        , {
            data: "price_usd", type: "numeric", format: "$0,0.00", language: "en-US"
        }        
        ]
    }
    );
    var hotDateData, containerDateData=document.getElementById("dateDate");
    hotDateData=new Handsontable(containerDateData, {
        data:getDateData(), colHeaders:["Car", "Model", "Registration date", "Price"], columns:[ {
            type: "autocomplete", source: ["Audi", "BMW", "Chrysler", "Citroen", "Mercedes", "Nissan", "Opel", "Suzuki", "Toyota", "Volvo"], strict: !1
        }
        , {}
        , {
            type:"date", dateFormat:"MM/DD/YYYY", correctFormat:!0, defaultDate:"01/01/1900", allowEmpty:!1, datePickerConfig: {
                firstDay:0, showWeekNumber:!0, numberOfMonths:3, disableDayFn:function(date) {
                    return 0===date.getDay()||6===date.getDay()
                }
            }
        }
        , {
            type: "numeric", format: "$ 0,0.00", language: "en-US"
        }
        ]
    }
    );
    var hotTimeData, containerTimeData=document.getElementById("timeData");
    hotTimeData=new Handsontable(containerTimeData, {
        data:getTimeData(), startRows:7, startCols:4, colHeaders:["Car", "Model", "Registration time", "Price"], columnSorting:!0, contextMenu:!0, minSpareRows:1, columns:[ {
            type: "autocomplete", source: ["Audi", "BMW", "Chrysler", "Citroen", "Mercedes", "Nissan", "Opel", "Suzuki", "Toyota", "Volvo"], strict: !1
        }
        , {}
        , {
            type: "time", timeFormat: "h:mm:ss a", correctFormat: !0
        }
        , {
            type: "numeric", format: "$ 0,0.00", language: "en-US"
        }
        ]
    }
    ), hotTimeData.validateCells();
    var hotCheckboxData, checkboxCheckboxData=document.getElementById("checkbox");
    hotCheckboxData=new Handsontable(checkboxCheckboxData, {
        data:getCheckboxData(), colHeaders:["Car model", "Year of manufacture", "Available"], columns:[ {
            data: "car"
        }
        , {
            data: "year", type: "numeric"
        }
        , {
            data: "available", type: "checkbox"
        }
        ]
    }
    );
    var hotCheckboxData, containerCheckboxData=document.getElementById("select");
    hotCheckboxData=new Handsontable(containerCheckboxData, {
        data:[["2014", "Nissan", 10], ["2015", "Honda", 20], ["2016", "Kia", 30]], colHeaders:!0, columns:[ {}
        , {
            editor: "select", selectOptions: ["Kia", "Nissan", "Toyota", "Honda"]
        }
        , {}
        ]
    }
    );
    var hotDropdown, containerDropdown=document.getElementById("dropdown");
    hotDropdown=new Handsontable(containerDropdown, {
        data:getDropdownData(), colHeaders:["Car", "Year", "Chassis color", "Bumper color"], columns:[ {}
        , {
            type: "numeric"
        }
        , {
            type: "dropdown", source: ["yellow", "red", "orange", "green", "blue", "gray", "black", "white"]
        }
        , {
            type: "dropdown", source: ["yellow", "red", "orange", "green", "blue", "gray", "black", "white"]
        }
        ]
    }
    );
    var hotAutocomplete, containerAutocomplete=document.getElementById("autocomplete");
    hotAutocomplete=new Handsontable(containerAutocomplete, {
        data:getAutocompleteData(), colHeaders:["Car", "Year", "Chassis color", "Bumper color"], columns:[ {
            type: "autocomplete", source: ["BMW", "Chrysler", "Nissan", "Suzuki", "Toyota", "Volvo"], strict: !1
        }
        , {
            type: "numeric"
        }
        , {
            type: "autocomplete", source: ["yellow", "red", "orange and another color", "green", "blue", "gray", "black", "white", "purple", "lime", "olive", "cyan"], strict: !1, visibleRows: 4
        }
        , {
            type: "autocomplete", source: ["yellow", "red", "orange and another color", "green", "blue", "gray", "black", "white", "purple", "lime", "olive", "cyan"], strict: !1, trimDropdown: !1
        }
        ]
    }
    );
    var hotPassword, containerPassword=document.getElementById("password");
    hotPassword=new Handsontable(containerPassword, {
        data:getPasswordData(), colHeaders:["ID", "First name", "Last name", "Password"], columns:[ {
            data: "id"
        }
        , {
            data: "name.first"
        }
        , {
            data: "name.last"
        }
        , {
            data: "password", type: "password"
        }
        ]
    }
    );
    var manufacturerData, colors, color, hotHandsontable, carData=getHandsontableData(), containerHandsontable=document.getElementById("handsontable"), colorData=[];
    for(manufacturerData=[ {
        name: "BMW", country: "Germany", owner: "Bayerische Motoren Werke AG"
    }
    , {
        name: "Chrysler", country: "USA", owner: "Chrysler Group LLC"
    }
    , {
        name: "Nissan", country: "Japan", owner: "Nissan Motor Company Ltd"
    }
    , {
        name: "Suzuki", country: "Japan", owner: "Suzuki Motor Corporation"
    }
    , {
        name: "Toyota", country: "Japan", owner: "Toyota Motor Corporation"
    }
    , {
        name: "Volvo", country: "Sweden", owner: "Zhejiang Geely Holding Group"
    }
    ], colors=["yellow", "red", "orange", "green", "blue", "gray", "black", "white"];
    color=colors.shift();
    )colorData.push([[color]]);
    hotHandsontable=new Handsontable(containerHandsontable, {
        data:carData, colHeaders:["Car", "Year", "Chassis color", "Bumper color"], columns:[ {
            type:"handsontable", handsontable: {
                colHeaders: ["Marque", "Country", "Parent company"], data: manufacturerData
            }
        }
        , {
            type: "numeric"
        }
        , {
            type:"handsontable", handsontable: {
                colHeaders: !1, data: colorData
            }
        }
        , {
            type:"handsontable", handsontable: {
                colHeaders: !1, data: colorData
            }
        }
        ]
    }
    )
}

);;