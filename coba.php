function updateBayar(){
                const lama_sewa = document.getElementById("lama_sewa").value;
                const tarif = document.getElementById("tarif").value;
                const tarif_harga = tarif;
                let totalHarga = 0;
                total_harga = tarif_harga * lama_sewa;
                document.getElementById("total_bayar").value = total_harga;
            }