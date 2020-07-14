var div = document.getElementById('imprimir');
    div.addEventListener('click', function (e) {

        let mywindow = window.open('', 'PRINT', 'height=650,width=900,top=100,left=150');

        mywindow.document.write(`<html><head><title>Ubicación</title>`);
        mywindow.document.write('</head><body >');
        mywindow.document.write(document.getElementById('pdf2').innerHTML);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10*/

        mywindow.print();
        mywindow.close();

        return true;
    });

