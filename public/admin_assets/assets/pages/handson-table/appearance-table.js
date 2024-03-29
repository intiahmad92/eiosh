document.addEventListener("DOMContentLoaded", function() {

        var hot, container = document.getElementById("borders");
        hot = Handsontable(container, {
            data: Handsontable.helper.createSpreadsheetData(70, 20),
            rowHeaders: !0,
            fixedColumnsLeft: 2,
            fixedRowsTop: 2,
            colHeaders: !0,
            customBorders: [{
                range: {
                    from: {
                        row: 1,
                        col: 1
                    },
                    to: {
                        row: 3,
                        col: 4
                    }
                },
                top: {
                    width: 2,
                    color: "#5292F7"
                },
                left: {
                    width: 2,
                    color: "orange"
                },
                bottom: {
                    width: 2,
                    color: "red"
                },
                right: {
                    width: 2,
                    color: "magenta"
                }
            }, {
                row: 2,
                col: 2,
                left: {
                    width: 2,
                    color: "red"
                },
                right: {
                    width: 1,
                    color: "green"
                }
            }]
        });
        var hot, data = [
                ["", "Kia", "Nissan", "Toyota", "Honda"],
                ["2013", 10, 11, 12, 13],
                ["2014", 20, 11, 14, 13],
                ["2015", 30, 15, 12, 13]
            ],
            container = document.getElementById("highlighting");
        hot = Handsontable(container, {
            data: data,
            minRows: 5,
            minCols: 6,
            currentRowClassName: "currentRow",
            currentColClassName: "currentCol",
            rowHeaders: !0,
            colHeaders: !0
        }), hot.selectCell(2, 2);
        var hotMobilesTablets, containerMobilesTablets = document.getElementById("mobilesTablets");
        hotMobilesTablets = new Handsontable(containerMobilesTablets, {
            data: Handsontable.helper.createSpreadsheetData(100, 100),
            rowHeaders: !0,
            colHeaders: !0,
            fixedRowsTop: 2,
            fixedColumnsLeft: 2
        })
    }

);
;