function calculateVolume() {
    const height = parseFloat(document.getElementById("height").value);
    const weight = parseFloat(document.getElementById("weight").value);
    const length = parseFloat(document.getElementById("length").value);
    const width = parseFloat(document.getElementById("width").value);

    const price = (height * weight * length * width)/12;

    document.getElementById("price").value = price;
}

// Get the source and target input fields
const price = document.getElementById('price');
const tAmount = document.getElementById('tAmount');

// Add an event listener to the source input field
price.addEventListener('input', function () {
    // Update the value of the target input field to match the source input field
    tAmount.value = price.value;
});

// Get the disabled input field
const disabledInput = document.getElementById("price");

// Disable the input field
disabledInput.disabled = true;
