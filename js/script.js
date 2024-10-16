document.getElementById('simulasi-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const principal = parseFloat(document.getElementById('principal').value);
    const rate = parseFloat(document.getElementById('rate').value) / 100;
    const time = parseInt(document.getElementById('time').value);

    const finalAmount = principal * Math.pow((1 + rate), time);
    document.getElementById('hasil').innerText = `Hasil Akhir: Rp ${finalAmount.toFixed(2)}`;
});
