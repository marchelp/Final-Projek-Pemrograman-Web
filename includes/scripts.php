<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Mengonversi data kesenian menjadi format JSON
    const kesenianData = <?php echo json_encode($kesenian); ?>;

    // Menampilkan data kesenian dalam elemen dengan id "kesenian-list"
    const kesenianList = document.getElementById('kesenian-list');

    kesenianData.forEach(kesenian => {
        const link = document.createElement('a');
        link.href = '#' + kesenian.id;
        link.classList.add('list-group-item', 'list-group-item-action');
        link.textContent = kesenian.title;

        kesenianList.appendChild(link);
    });
</script>

<script>
    // Mengonversi data kerajinan menjadi format JSON
    const kerajinanData = <?php echo json_encode($kerajinan); ?>;

    // Menampilkan data kerajinan dalam elemen dengan id "kerajinan-list"
    const kerajinanList = document.getElementById('kerajinan-list');

    kerajinanData.forEach(kerajinan => {
        const link = document.createElement('a');
        link.href = '#' + kerajinan.id;
        link.classList.add('list-group-item', 'list-group-item-action');
        link.textContent = kerajinan.title;

        kerajinanList.appendChild(link);
    });
</script>