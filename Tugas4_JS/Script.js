function transaksi() {
    let frm = document.getElementById('pegawaiForm');
    let namaPegawai = frm.nama.value;
    let jabatan = frm.jabatan.value;
    let status = frm.status.value;
    let gajiPokok;
    let tunjanganJabatan;
    let bpjs;
    let tunjanganKeluarga;
    let totalGaji;

    switch (jabatan) {
        case "Manager":
            gajiPokok = 15000000;
            break;
        case "Asisten manager":
            gajiPokok = 10000000;
            break;
        case "Staff":
            gajiPokok = 5000000;
            break;
    }

    tunjanganJabatan = gajiPokok * 0.15;
    bpjs = gajiPokok * 0.1;
    tunjanganKeluarga = status === "Menikah" ? gajiPokok * 0.2 : 0;
    totalGaji = gajiPokok + tunjanganJabatan + bpjs + tunjanganKeluarga;

    swal.fire({
        title: "Data Pegawai",
        width: 1000,
        html: `
            <table border="1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pegawai</th>
                        <th>Jabatan</th>
                        <th>Status</th>
                        <th>Gaji Pokok</th>
                        <th>Tunjangan Jabatan</th>
                        <th>BPJS</th>
                        <th>Tunjangan Keluarga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>${namaPegawai}</td>
                        <td>${jabatan}</td>
                        <td>${status}</td>
                        <td>Rp. ${gajiPokok.toLocaleString('id-ID')}</td>
                        <td>Rp. ${tunjanganJabatan.toLocaleString('id-ID')}</td>
                        <td>Rp. ${bpjs.toLocaleString('id-ID')}</td>
                        <td>Rp. ${tunjanganKeluarga.toLocaleString('id-ID')}</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7">Total Gaji</td>
                        <td>Rp. ${totalGaji.toLocaleString('id-ID')}</td>
                    </tr>
                </tfoot>
            </table>
        `,
        icon: "info",
        button: "Oke",
    });
}
