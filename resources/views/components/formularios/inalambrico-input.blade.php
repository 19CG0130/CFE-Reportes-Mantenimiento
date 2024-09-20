<div class="flex flex-col space-y-4">
    <div>
        <label for="input-2" class="block text-base font-medium text-gray-900">IP
            Inalámbrica</label>
        <input type="hidden" id="input-IpInalambrica" name="IpInalambrica">

        <style>
            .ip-container3 {
                display: inline-flex;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            .ip-segmentI {
                width: 35px;
                text-align: center;
                border: none;
                outline: none;
            }

            .ip-container3 input[type="text"] {
                border: none;
                margin: 0;
                padding: 0;
            }

            .dot {
                display: flex;
                align-items: center;
                padding: 0 5px;
                color: #000;
                margin: 0;
            }
        </style>

        <div class="ip-container3 py-1.5">
            <input type="text"  name="ii1" value="{{ old('ii1') }}" class="ip-segmentI" maxlength="3" id="segI1" />
            <span class="dot">.</span>
            <input type="text"  name="ii2" value="{{ old('ii2') }}" class="ip-segmentI" maxlength="3" id="segI2" />
            <span class="dot">.</span>
            <input type="text"  name="ii3" value="{{ old('ii3') }}"class="ip-segmentI" maxlength="3" id="segI3" />
            <span class="dot">.</span>
            <input type="text"  name="ii4" value="{{ old('ii4') }}"class="ip-segmentI" maxlength="3" id="segI4" />
        </div>
        <x-input-error :messages="$errors->get('IpInalambrica')" class="mt-2" />
    </div>
    <script>
        const segmentsI = document.querySelectorAll('.ip-segmentI');
        const fullIpInputIP = document.getElementById('input-IpInalambrica');

        segmentsI.forEach((segment, index) => {
            segment.addEventListener('input', function() {
                const ipAddressI = Array.from(segmentsI).map(seg => seg.value).join('.');
                fullIpInputIP.value = ipAddressI;

                // Mover al siguiente input automáticamente si se alcanzan 3 caracteres
                if (segment.value.length === 3 && index < segmentsI.length - 1) {
                    segmentsI[index + 1].focus();
                }
            });

            segment.addEventListener('keydown', function(e) {
                // Navegación manual con teclas
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
</div>
<!-- MAC Inalámbrica -->
<div>
    <input type="hidden" id="input-macInalambrica" name="macInalambrica">
    <style>
        .ip-container4 {
            display: inline-flex;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .Mac-segmentI {
            width: 35px;
            text-align: center;
            border: none;
            outline: none;
        }

        .ip-container4 input[type="text"] {
            border: none;
            margin: 0;
            padding: 0;
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
            text-align: center;
        }
    </style>

    <div class="mac-container">
        <label for="input-2" class="block text-base font-medium text-gray-900">MAC Inalámbrica</label>
        <div class="ip-container4 py-1.5">
            <input type="text" name="mi1" value="{{ old('mi1') }}" class="Mac-segmentI small-input" maxlength="2" id="segmI1" />
            <span class="dot">:</span>
            <input type="text" name="mi2" value="{{ old('mi2') }}" class="Mac-segmentI small-input" maxlength="2" id="segmI2" />
            <span class="dot">:</span>
            <input type="text" name="mi3" value="{{ old('mi3') }}" class="Mac-segmentI small-input" maxlength="2" id="segmI3" />
            <span class="dot">:</span>
            <input type="text" name="mi4" value="{{ old('mi4') }}" class="Mac-segmentI small-input" maxlength="2" id="segmI4" />
            <span class="dot">:</span>
            <input type="text" name="mi5" value="{{ old('mi5') }}" class="Mac-segmentI small-input" maxlength="2" id="segmI5" />
            <span class="dot">:</span>
            <input type="text" name="mi6" value="{{ old('mi6') }}" class="Mac-segmentI small-input" maxlength="2" id="segmI6" />
        </div>
        <x-input-error :messages="$errors->get('macInalambrica')" class="mt-2" />
    </div>

    <script>
        const segmentsMI = document.querySelectorAll('.Mac-segmentI');
        const fullIpInputMI = document.getElementById('input-macInalambrica');

        segmentsMI.forEach((segment, index) => {
            segment.addEventListener('input', function() {
                segment.value = segment.value.toUpperCase();
                const macAddressMI = Array.from(segmentsMI).map(seg => seg.value).join(':');
                fullIpInputMI.value = macAddressMI;

                // Mover al siguiente input automáticamente si se alcanzan 2 caracteres
                if (segment.value.length === 2 && index < segmentsMI.length - 1) {
                    segmentsMI[index + 1].focus();
                }
            });

            segment.addEventListener('keydown', function(e) {
                // Navegación manual con teclas
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
    <label for="input-2" class="block text-base font-medium text-gray-900">MAC Bluetooth</label>
    <input type="hidden" id="input-macBluetooth" name="macBluetooth">
    
    <style>
        .ip-container5 {
            display: inline-flex;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .Mac-segmentB {
            width: 35px;
            text-align: center;
            border: none;
            outline: none;
        }

        .ip-container5 input[type="text"] {
            border: none;
            margin: 0;
            padding: 0;
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
            text-align: center;
        }
    </style>

    <div class="ip-container5 py-1.5">
        <input type="text" name="mb1" value="{{ old('mb1') }}" class="Mac-segmentB small-input" maxlength="2" id="segmB1" />
        <span class="dot">:</span>
        <input type="text" name="mb2" value="{{ old('mb2') }}" class="Mac-segmentB small-input" maxlength="2" id="segmB2" />
        <span class="dot">:</span>
        <input type="text" name="mb3" value="{{ old('mb3') }}" class="Mac-segmentB small-input" maxlength="2" id="segmB3" />
        <span class="dot">:</span>
        <input type="text" name="mb4" value="{{ old('mb4') }}" class="Mac-segmentB small-input" maxlength="2" id="segmB4" />
        <span class="dot">:</span>
        <input type="text" name="mb5" value="{{ old('mb5') }}" class="Mac-segmentB small-input" maxlength="2" id="segmB5" />
        <span class="dot">:</span>
        <input type="text" name="mb6" value="{{ old('mb6') }}" class="Mac-segmentB small-input" maxlength="2" id="segmB6" />
    </div>
    <x-input-error :messages="$errors->get('macBluetooth')" class="mt-2" />
    <script>
        const segmentsMB = document.querySelectorAll('.Mac-segmentB');
        const fullMacInputMB = document.getElementById('input-macBluetooth');

        segmentsMB.forEach((segment, index) => {
            segment.addEventListener('input', function() {
                segment.value = segment.value.toUpperCase();

                const macAddressB = Array.from(segmentsMB).map(seg => seg.value).join(':');
                fullMacInputMB.value = macAddressB;

                // Mover al siguiente input automáticamente si se alcanzan 2 caracteres
                if (segment.value.length === 2 && index < segmentsMB.length - 1) {
                    segmentsMB[index + 1].focus();
                }
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
                fullMacInputMB.value = macAddressB;
            }
        });
    </script>
</div>
