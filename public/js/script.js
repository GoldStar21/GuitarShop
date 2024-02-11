
document.addEventListener('DOMContentLoaded', function () {
    var table = document.getElementById('ftable');
    var form = document.getElementById('formId');
    var selectedRow = null;

    table.addEventListener('click', function (event) {
        var targetRow = event.target.closest('tr');
        
        if (targetRow) {
            // Deselektuj prethodno selektovani red ako postoji IZUČI OVAJ KOD FILIPE

            if (selectedRow) {
                selectedRow.classList.remove('selected');
            }

            // Selektuj novi red
            targetRow.classList.add('selected');
            selectedRow = targetRow;
        }
    });

    table.addEventListener('dblclick', function (event) {
        var targetRow = event.target.closest('tr');
        
        if (targetRow) {
            // Dohvati vrednosti ćelija u selektovanom redu
            var cells = targetRow.cells;
            var brand = cells[1].textContent;
            var model = cells[2].textContent;
            var type = cells[3].textContent;
            var color = cells[4].textContent;
            var description = cells[5].textContent;
            var price = cells[6].textContent;

            // Postavite vrednosti forme prema vrednostima tabele
            document.getElementById('brand').value = brand;
            document.getElementById('model').value = model;
            document.getElementById('type').value = type;
            document.getElementById('color').value = color;
            document.getElementById('description').value = description;
            document.getElementById('price').value = price;

            // Prikazivanje forme
            // Ovde možete dodati logiku za prikazivanje i stilizaciju forme po potrebi
        }
    });


 
});
 






// Klik na red sada radi, ubuduće se služi konzolom. Pročitaj JS do kraja veceras sve
// i razumi malo logiku onog koda. Idući potez je klik na elemenat i da ga ponovno salje u formu,
// nakon toga osposovljavanje gumba UPDATE. Samo Laga stari.



/**
 * document.addEventListener('DOMContentLoaded', function () {
    var table = document.getElementById('ftable');

    for (var i = 1; i < table.rows.length; i++) {
        table.rows[i].onclick = function () {
            document.getElementById("brand").value = this.cells[0].innerHTML;
            document.getElementById("model").value = this.cells[1].innerHTML;
            document.getElementById("type").value = this.cells[2].innerHTML;
            document.getElementById("color").value = this.cells[3].innerHTML;
            document.getElementById("description").value = this.cells[4].innerHTML;
            document.getElementById("price").value = this.cells[5].innerHTML;
            document.getElementById("image_path").value = this.cells[6].innerHTML;
        };
    }
});
 * 
  */