document.addEventListener("DOMContentLoaded", function() {
    var hot1, example=document.getElementById("scrolling");
    hot1=new Handsontable(example, {
        data: Handsontable.helper.createSpreadsheetData(100, 100), height: 400, colWidths: 50, rowHeights: 32, rowHeaders: !0, colHeaders: !0
    }
    );
    var hot, myData=Handsontable.helper.createSpreadsheetData(100, 50), container=document.getElementById("fixing");
    hot=new Handsontable(container, {
        data: myData, colWidths: [47, 47, 47, 47, 47, 47, 47, 47, 47, 47], rowHeaders: !0, colHeaders: !0, fixedRowsTop: 2, fixedColumnsLeft: 2
    }
    );
    var hot, container=document.getElementById("resizing");
    hot=new Handsontable(container, {
        data: Handsontable.helper.createSpreadsheetData(10, 10), rowHeaders: !0, colHeaders: !0, colWidths: [55, 80, 80, 80, 80, 80, 80], rowHeights: [50, 40, 100], manualColumnResize: !0, manualRowResize: !0
    }
    );
    var hot, moving=document.getElementById("moving");
    hot=new Handsontable(moving, {
        data: Handsontable.helper.createSpreadsheetData(100, 20), rowHeaders: !0, colHeaders: !0, manualColumnMove: !0, manualRowMove: !0
    }
    )
}

);;