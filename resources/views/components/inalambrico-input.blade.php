<div class="flex flex-col space-y-4">
    <div>
        <label for="input-2" class="block text-base font-medium text-gray-900">IP
            Inalámbrica</label>
        <input type="hidden" id="input-IpInalambrica" name="IpInalambrica">

        <!-- Script IP Inalámbrica -->
        <style>
            .ip-container3 {
                display: inline-flex;
                border: 1px solid #ccc;
                border-radius: 4px;
                padding: 5px;
            }

            .ip-segmentI {
                width: 35px;
                text-align: center;
                border: none;
                outline: none;
            }

            .ip-container3 input[type="text"] {
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

        <div class="ip-container3">
            <input type="text" class="ip-segmentI" maxlength="3" id="segI1" />
            <span class="dot">.</span>
            <input type="text" class="ip-segmentI" maxlength="3" id="segI2" />
            <span class="dot">.</span>
            <input type="text" class="ip-segmentI" maxlength="3" id="segI3" />
            <span class="dot">.</span>
            <input type="text" class="ip-segmentI" maxlength="3" id="segI4" />
        </div>
    </div>
    <script>
        const segmentsI = document.querySelectorAll('.ip-segmentI');
        const fullIpInputIP = document.getElementById('input-IpInalambrica');

        segmentsI.forEach((segment, index) => {
            segment.addEventListener('input', function() {
                // Unir los valores
                const ipAddressI = Array.from(segmentsI).map(seg => seg.value).join('.');
                fullIpInputIP.value = ipAddressI;
            });

            segment.addEventListener('keydown', function(e) {
                // Navegación manual 
                if (e.key === 'Backspace' && segment.value === '' && index > 0) {
                    segmentsI[index - 1].focus();
                } else if (e.key === 'ArrowRight' && index < 3) {
                    segmentsI[index + 1].focus();
                } else if (e.key === 'ArrowLeft' && index > 0) {
                    segmentsI[index - 1].focus();
                }
            });
        });

        // Validar 
        document.querySelector('form').addEventListener('submit', function(e) {
            let valid = true;
            segmentsI.forEach(segment => {
                if (segment.value.length < 1 || segment.value.length > 3) {
                    valid = false;
                }
            });

            if (!valid) {
                e.preventDefault();
                alert('Por favor, asegúrese de que cada segmento de la IP tenga entre 1 y 3 dígitos.');
            } else {
                // Concatenar los segmentos y asignar el valor al input de IP completa
                const ipAddressI = Array.from(segmentsI).map(seg => seg.value).join('.');
                fullIpInputIP.value = ipAddressI;
            }
        });
    </script>
    <!--End Script IP Inalámbrica-->
</div>
<!-- MAC Inalámbrica -->
<div>
    <input type="hidden" id="input-macInalambrica" name="macInalambrica">
    <!--Script and Style MAC IN-->
    <style>
        .ip-container4 {
            display: inline-flex;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 5px;
        }

        .Mac-segmentI {
            width: 35px;
            text-align: center;
            border: none;
            outline: none;
        }

        .ip-container4 input[type="text"] {
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

    <div class="mac-container">
        <label for="input-2" class="block text-base font-medium text-gray-900">MAC Inalámbrica</label>
        <div class="ip-container4">
            <input type="text" class="Mac-segmentI small-input" maxlength="2" id="segmI1" />
            <span class="dot">:</span>
            <input type="text" class="Mac-segmentI small-input" maxlength="2" id="segmI2" />
            <span class="dot">:</span>
            <input type="text" class="Mac-segmentI small-input" maxlength="2" id="segmI3" />
            <span class="dot">:</span>
            <input type="text" class="Mac-segmentI small-input" maxlength="2" id="segmI4" />
            <span class="dot">:</span>
            <input type="text" class="Mac-segmentI small-input" maxlength="2" id="segmI5" />
            <span class="dot">:</span>
            <input type="text" class="Mac-segmentI small-input" maxlength="2" id="segmI6" />
        </div>
    </div>




    <script>
        const segmentsMI = document.querySelectorAll('.Mac-segmentI');
        const fullIpInputMI = document.getElementById('input-macInalambrica');

        segmentsMI.forEach((segment, index) => {
            segment.addEventListener('input', function() {

                const macAddressMI = Array.from(segmentsMI).map(seg => seg.value).join(':');
                fullIpInputMI.value = macAddressMI;
            });

            segment.addEventListener('keydown', function(e) {
                // Navegación manual entre segmentos con las flechas o Backspace
                if (e.key === 'Backspace' && segment.value === '' && index > 0) {
                    segmentsMI[index - 1].focus();
                } else if (e.key === 'ArrowRight' && index < 5) {
                    segmentsMI[index + 1].focus();
                } else if (e.key === 'ArrowLeft' && index > 0) {
                    segmentsMI[index - 1].focus();
                }
            });
        });


        document.querySelector('form').addEventListener('submit', function(e) {
            let valid = true;
            segmentsMI.forEach(segment => {
                if (segment.value.length < 1 || segment.value.length > 2) {
                    valid = false;
                }
            });

            if (!valid) {
                e.preventDefault();
                alert('Por favor, asegúrese de que cada segmento de la MAC tenga entre 1 y 2 dígitos.');
            } else {

                const macAddressMI = Array.from(segmentsMI).map(seg => seg.value).join(':');
                fullIpInputMI.value = macAddressMI;
            }
        });
    </script>


</div>
<!-- Bluetooth -->
<div>
    <label for="input-2" class="block text-base font-medium text-gray-900">MAC
        Bluetooth</label>
    <input type="hidden" id="input-macBluetooth" name="macBluetooth">
    <!--Script and Style Bluetooth-->
    <style>
        .ip-container5 {
            display: inline-flex;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 5px;
        }

        .Mac-segmentB {
            width: 35px;
            text-align: center;
            border: none;
            outline: none;
        }

        .ip-container5 input[type="text"] {
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

    <div class="ip-container5">
        <input type="text" class="Mac-segmentB small-input" maxlength="3" id="segmB1" />
        <span class="dot">:</span>
        <input type="text" class="Mac-segmentB small-input" maxlength="3" id="segmB2" />
        <span class="dot">:</span>
        <input type="text" class="Mac-segmentB small-input" maxlength="3" id="segmB3" />
        <span class="dot">:</span>
        <input type="text" class="Mac-segmentB small-input" maxlength="3" id="segmB4" />
        <span class="dot">:</span>
        <input type="text" class="Mac-segmentB small-input" maxlength="3" id="segmB4" />
        <span class="dot">:</span>
        <input type="text" class="Mac-segmentB small-input" maxlength="3" id="segmB4" />
    </div>

    <script>
        const segmentsMB = document.querySelectorAll('.Mac-segmentB');
        const fullIpInputMBI = document.getElementById('input-macBluetooth');

        segmentsMB.forEach((segment, index) => {
            segment.addEventListener('input', function() {

                const macAddressB = Array.from(segmentsMB).map(seg => seg.value).join(':');
                fullIpInputMBI.value = macAddressB;
            });

            segment.addEventListener('keydown', function(e) {
                // Navegación manual entre segmentos con las flechas o Backspace
                if (e.key === 'Backspace' && segment.value === '' && index > 0) {
                    segmentsMB[index - 1].focus();
                } else if (e.key === 'ArrowRight' && index < 5) {
                    segmentsMB[index + 1].focus();
                } else if (e.key === 'ArrowLeft' && index > 0) {
                    segmentsMB[index - 1].focus();
                }
            });
        });


        document.querySelector('form').addEventListener('submit', function(e) {
            let valid = true;
            segmentsMB.forEach(segment => {
                if (segment.value.length < 1 || segment.value.length > 2) {
                    valid = false;
                }
            });

            if (!valid) {
                e.preventDefault();
                alert('Por favor, asegúrese de que cada segmento de la MAC tenga entre 1 y 2 dígitos.');
            } else {

                const macAddressB = Array.from(segmentsMB).map(seg => seg.value).join(':');
                fullIpInputMBI.value = macAddressB;
            }
        });
    </script>

    <!--End Script and Style Bluetooth-->
</div>
