const hitung = document.getElementById('hitung');
hitung.addEventListener('click', (event) => {
  event.preventDefault();
  const hargaTiket = {
    ekonomi: 100000,
    bisnis: 200000,
    eksekutif: 300000,
  };
  const kelas = document.getElementById('kp').value;
  // alert(hargaTiket[kelas])
  document.getElementById('hargaTiket').innerHTML = hargaTiket[kelas];
  document.getElementById('hargaTiketSebenarnya').value = hargaTiket[kelas];

  const jumlahPenumpang = document.getElementById('jumlahPenumpang').value;
  const jumlahPenumpangLansia = document.getElementById('jumlahPenumpangLansia').value;
  let total = 0;

  if (jumlahPenumpang > 0) {
    total += hargaTiket[kelas] * jumlahPenumpang;
  }
  if (jumlahPenumpangLansia > 0) {
    const hargadisc = hargaTiket[kelas] - hargaTiket[kelas] * 0.1;
    total += hargadisc * jumlahPenumpangLansia;
  }

  document.getElementById('totalBayar').innerHTML = total;
  document.getElementById('totalBayarSebenarnya').value = total;
});

document.getElementById('cancel').addEventListener('click', function () {
  // alert('Cancel')
  document.getElementById('namaLengkap').value = '';
  document.getElementById('noIdentitas').value = '';
  document.getElementById('noHP').value = '';
  document.getElementById('kp').value = '';
  document.getElementById('jadwalKeberangkatan').value = '';
  document.getElementById('jumlahPenumpang').value = 1;
  document.getElementById('jumlahPenumpangLansia').value = 0;
  document.getElementById('hargaTiketSebenarnya').value = '';
  document.getElementById('totalBayarSebenarnya').value = '';
  document.getElementById('totalBayar').innerHTML = 0;
  document.getElementById('hargaTiket').innerHTML = 0;
});

const checkbox = document.getElementById('exampleCheck1');

checkbox.addEventListener('change', function () {
  if (this.checked) {
    document.getElementById('pesan').disabled = false;
  } else {
    document.getElementById('pesan').disabled = true;
  }
});
