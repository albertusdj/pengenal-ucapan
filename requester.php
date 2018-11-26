<script>
  setInterval(function () {
    const xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
      if(this.readyState == 4 && this.status == 200) {
        const command = xhttp.responseText;
        console.log(command);

        if (command === "GAMBAR SATU LINGKARAN") {
          addCircle();
        }
        else if (command === "GAMBAR DUA LINGKARAN") {
          addCircle();
          addCircle();
        }
        else if (command === "GAMBAR TIGA LINGKARAN") {
          addCircle();
          addCircle();
          addCircle();
        }
        else if (command === "GAMBAR EMPAT LINGKARAN") {
          addCircle();
          addCircle();
          addCircle();
          addCircle();
        }
        else if (command === "GAMBAR LIMA LINGKARAN") {
          addCircle();
          addCircle();
          addCircle();
          addCircle();
          addCircle();
        }
        else if (command === "GAMBAR SATU KOTAK") {
          addRectangle();
        }
        else if (command === "GAMBAR DUA KOTAK") {
          addRectangle();
          addRectangle();
        }
        else if (command === "GAMBAR TIGA KOTAK") {
          addRectangle();
          addRectangle();
          addRectangle();
        }
        else if (command === "GAMBAR EMPAT KOTAK") {
          addRectangle();
          addRectangle();
          addRectangle();
          addRectangle();
        }
        else if (command === "GAMBAR LIMA KOTAK") {
          addRectangle();
          addRectangle();
          addRectangle();
          addRectangle();
          addRectangle();
        }
        else if (command === "GAMBAR SATU SEGITIGA") {
          addTriangle();
        }
        else if (command === "GAMBAR DUA SEGITIGA") {
          addTriangle();
          addTriangle();
        }
        else if (command === "GAMBAR TIGA SEGITIGA") {
          addTriangle();
          addTriangle();
          addTriangle();
        }
        else if (command === "GAMBAR EMPAT SEGITIGA") {
          addTriangle();
          addTriangle();
          addTriangle();
          addTriangle();
        }
        else if (command === "GAMBAR LIMA SEGITIGA") {
          addTriangle();
          addTriangle();
          addTriangle();
          addTriangle();
          addTriangle();
        }
        else if (command === "GAMBAR SATU TRAPESIUM") {
          addTrapezoid();
        }
        else if (command === "GAMBAR DUA TRAPESIUM") {
          addTrapezoid();
          addTrapezoid();
        }
        else if (command === "GAMBAR TIGA TRAPESIUM") {
          addTrapezoid();
          addTrapezoid();
          addTrapezoid();
        }
        else if (command === "GAMBAR EMPAT TRAPESIUM") {
          addTrapezoid();
          addTrapezoid();
          addTrapezoid();
          addTrapezoid();
        }
        else if (command === "GAMBAR LIMA TRAPESIUM") {
          addTrapezoid();
          addTrapezoid();
          addTrapezoid();
          addTrapezoid();
          addTrapezoid();
        }
        else if (command === "ATUR TAMPILAN SEMAKIN BESAR") {
          zoomIn();
        }
        else if (command === "ATUR TAMPILAN SEMAKIN KECIL") {
          zoomOut();
        }
        else if (command === "WARNAI LINGKARAN MERAH") {
          fillCircle(red);
        }
        else if (command === "WARNAI LINGKARAN BIRU") {
          fillCircle(blue);
        }
        else if (command === "WARNAI LINGKARAN HIJAU") {
          fillCircle(green);
        }
        else if (command === "WARNAI KOTAK MERAH") {
          fillRectangle(red);
        }
        else if (command === "WARNAI KOTAK BIRU") {
          fillRectangle(blue);
        }
        else if (command === "WARNAI KOTAK HIJAU") {
          fillRectangle(green);
        }
        else if (command === "WARNAI SEGITIGA MERAH") {
          fillTriangle(red);
        }
        else if (command === "WARNAI SEGITIGA BIRU") {
          fillTriangle(blue);
        }
        else if (command === "WARNAI SEGITIGA HIJAU") {
          fillTriangle(green);
        }
        else if (command === "WARNAI TRAPESIUM MERAH") {
          fillTrapezoid(red);
        }
        else if (command === "WARNAI TRAPESIUM BIRU") {
          fillTrapezoid(blue);
        }
        else if (command === "WARNAI TRAPESIUM HIJAU") {
          fillTrapezoid(green);
        }
        else if (command === "HAPUS LINGKARAN") {
          eraseCircle();
        }
        else if (command === "HAPUS KOTAK") {
          eraseRectangle();
        }
        else if (command === "HAPUS SEGITIGA") {
          eraseTriangle();
        }
        else if (command === "HAPUS TRAPESIUM") {
          eraseTrapezoid();
        }
      }
    }

    xhttp.open('GET', 'listener.php', true);
    xhttp.send();
  }, 500);
</script>