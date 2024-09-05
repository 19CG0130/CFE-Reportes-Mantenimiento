<label for="input-2" class="block text-base font-medium text-gray-900">IP
    Ethernet</label>

<!--Script IP Ethernet-->
<style>
    .ip-container {
        display: inline-flex;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 5px;
    }

    .ip-segment {
        width: 35px;
        text-align: center;
        border: none;
        outline: none;
    }

    .ip-container input[type="text"] {
        padding: 5px;
        border: none;
        margin: 0;
    }

    .dot {
        display: flex;
        align-items: center;
        padding: 0 5px;
        color: #000;
        margin: 0;
    }
</style>

<div class="ip-container">
    <input type="text" class="ip-segment" maxlength="3" id="seg1" />
    <span class="dot">.</span>
    <input type="text" class="ip-segment" maxlength="3" id="seg2" />
    <span class="dot">.</span>
    <input type="text" class="ip-segment" maxlength="3" id="seg3" />
    <span class="dot">.</span>
    <input type="text" class="ip-segment" maxlength="3" id="seg4" />
</div>





<!-- Input para mostrar la IP completa -->
<div>
    <input type="hidden" id="input-IpEthernet" name="IpEthernet" readonly />
</div>

<script>
    const segments = document.querySelectorAll('.ip-segment');
    const fullIpInput = document.getElementById('input-IpEthernet');

    segments.forEach((segment, index) => {
        segment.addEventListener('input', function() {

            const ipAddress = Array.from(segments).map(seg => seg.value).join('.');
            fullIpInput.value = ipAddress;
        });

        segment.addEventListener('keydown', function(e) {

            if (e.key === 'Backspace' && segment.value === '' && index > 0) {
                segments[index - 1].focus();
            } else if (e.key === 'ArrowRight' && index < 3) {
                segments[index + 1].focus();
            } else if (e.key === 'ArrowLeft' && index > 0) {
                segments[index - 1].focus();
            }
        });
    });


    document.querySelector('form').addEventListener('submit', function(e) {
        let valid = true;
        segments.forEach(segment => {
            if (segment.value.length < 1 || segment.value.length > 3) {
                valid = false;
            }
        });

        if (!valid) {
            e.preventDefault();
            alert('Por favor, asegúrese de que cada segmento de la IP tenga entre 1 y 3 dígitos.');
        } else {
            // Concatenar 
            const ipAddress = Array.from(segments).map(seg => seg.value).join('.');
            fullIpInput.value = ipAddress;
        }
    });
</script>


<!--End of Script IP Ethernet-->
</div>
<!-- MAC Ethernet -->
<div>
<label for="input-2" class="block text-base font-medium text-gray-900">MAC
    Ethernet</label>
<input type="hidden" id="input-macEthernet" name="macEthernet">
<!--Script MAC Ethernet-->
<style>
    .ip-container2 {
        display: inline-flex;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 5px;
    }

    .Mac-segment {
        width: 35px;
        text-align: center;
        border: none;
        outline: none;
    }

    .ip-container2 input[type="text"] {
        padding: 5px;
        border: none;
        margin: 0;
    }

    .dot {
        display: flex;
        align-items: center;
        padding: 0 5px;
        color: #000;
        margin: 0;
    }
    .small-input {
        width: 25px; 
        padding: 3px; 
        font-size: 12px; 
        text-align: center;
    }
</style>

<div class="ip-container2">
    <input type="text" class="Mac-segment small-input" maxlength="3" id="segm1" />
    <span class="dot">:</span>
    <input type="text" class="Mac-segment small-input" maxlength="3" id="segm2" />
    <span class="dot">:</span>
    <input type="text" class="Mac-segment small-input" maxlength="3" id="segm3" />
    <span class="dot">:</span>
    <input type="text" class="Mac-segment small-input" maxlength="3" id="segm4" />
    <span class="dot">:</span>
    <input type="text" class="Mac-segment small-input" maxlength="3" id="segm4" />
    <span class="dot">:</span>
    <input type="text" class="Mac-segment small-input" maxlength="3" id="segm4" />
</div>

<script>
    const segmentsM = document.querySelectorAll('.Mac-segment');
    const fullIpInputI = document.getElementById('input-macEthernet');

    segmentsM.forEach((segment, index) => {
        segment.addEventListener('input', function() {
            
            const macAddressI = Array.from(segmentsM).map(seg => seg.value).join(':');
            fullIpInputI.value = macAddressI;
        });

        segment.addEventListener('keydown', function(e) {
            // Navegación manual entre segmentos con las flechas o Backspace
            if (e.key === 'Backspace' && segment.value === '' && index > 0) {
                segmentsM[index - 1].focus();
            } else if (e.key === 'ArrowRight' && index < 5) {
                segmentsM[index + 1].focus();
            } else if (e.key === 'ArrowLeft' && index > 0) {
                segmentsM[index - 1].focus();
            }
        });
    });

    
    document.querySelector('form').addEventListener('submit', function(e) {
        let valid = true;
        segmentsM.forEach(segment => {
            if (segment.value.length < 1 || segment.value.length > 2) {
                valid = false;
            }
        });

        if (!valid) {
            e.preventDefault();
            alert('Por favor, asegúrese de que cada segmento de la MAC tenga entre 1 y 2 dígitos.');
        } else {
            
            const macAddressI = Array.from(segmentsM).map(seg => seg.value).join(':');
            fullIpInputI.value = macAddressI;
        }
    });
</script>
