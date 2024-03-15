function dataPerson() {
    let forms = document.getElementById('frm');
    let nama = forms.nama.value;
    let pekerjaan = forms.pekerjaan.value;
    let hobi = forms.hobi.value;

    let hasil = `
            <p>Nama: ${nama}</p>
            <p>Pekerjaan: ${pekerjaan}</p>
            <p>Hobby: ${hobi}</p>
        `;

    document.getElementById('hasil').innerHTML = hasil;
}
