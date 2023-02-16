// Selecciona todas las filas de la tabla
let rows = document.querySelectorAll("tr");

// Itera a través de cada fila
rows.forEach(function(row) {
    // Selecciona la celda en la columna específica
    let cell = row.querySelector("td:nth-child(colNumber)");

    // Si la celda no tiene contenido
    if (!cell.textContent.trim()) {
        // Elimina la fila completa
        row.remove();
    }
});
