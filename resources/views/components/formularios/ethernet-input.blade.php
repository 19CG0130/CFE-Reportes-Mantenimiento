<label for="input-2" class="block text-base font-medium text-gray-900">IP
    Ethernet</label>

<style>
    .ip-container {
        display: inline-flex;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .ip-segment {
        width: 35px;
        text-align: center;
        border: none;
        outline: none;
    }

    .ip-container input[type="text"] {
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

<div class="ip-container py-1.5">
    <input type="text" name="i1" class="ip-segment" value="{{ old('i1') }}" maxlength="3" id="seg1" />
    <span class="dot">.</span>
    <input type="text" name="i2" class="ip-segment" value="{{ old('i2') }}" maxlength="3" id="seg2" />
    <span class="dot">.</span>
    <input type="text" name="i3" class="ip-segment" value="{{ old('i3') }}" maxlength="3" id="seg3" />
    <span class="dot">.</span>
    <input type="text" name="i4" class="ip-segment" value="{{ old('i4') }}" maxlength="3" id="seg4" />
</div>
<x-input-error :messages="$errors->get('IpEthernet')" class="mt-2" />

<div>
    <input type="hidden" id="input-IpEthernet" name="IpEthernet" readonly />
</div>

<script>
    const segments = document.querySelectorAll('.ip-segment');
    const fullIpInput = document.getElementById('input-IpEthernet');

    segments.forEach((segment, index) => {
        segment.addEventListener('input', function() {
            if (segment.value.length === segment.maxLength && index < segments.length - 1) {
                segments[index + 1].focus(); // Mueve el foco al siguiente segmento
            }

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

</div>
<!-- MAC Ethernet -->
<div>
    <label for="input-2" class="block text-base font-medium text-gray-900">MAC
        Ethernet</label>
    <input type="hidden" id="input-macEthernet" name="macEthernet">
    
    <style>
        .ip-container2 {
            display: inline-flex;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .Mac-segment {
            width: 35px;
            text-align: center;
            border: none;
            outline: none;
        }

        .ip-container2 input[type="text"] {
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

    <div class="ip-container2 py-1.5">
        <input type="text" name="m1" value="{{ old('m1') }}" class="Mac-segment small-input" maxlength="2" id="segm1" />
        <span class="dot">:</span>
        <input type="text" name="m2" value="{{ old('m2') }}" class="Mac-segment small-input" maxlength="2" id="segm2" />
        <span class="dot">:</span>
        <input type="text" name="m3" value="{{ old('m3') }}" class="Mac-segment small-input" maxlength="2" id="segm3" />
        <span class="dot">:</span>
        <input type="text" name="m4" value="{{ old('m4') }}" class="Mac-segment small-input" maxlength="2" id="segm4" />
        <span class="dot">:</span>
        <input type="text" name="m5" value="{{ old('m5') }}" class="Mac-segment small-input" maxlength="2" id="segm4" />
        <span class="dot">:</span>
        <input type="text" name="m6" value="{{ old('m6') }}" class="Mac-segment small-input" maxlength="2" id="segm4" />
    </div>
    <x-input-error :messages="$errors->get('macEthernet')" class="mt-2" />

    <script>
        const segmentsM = document.querySelectorAll('.Mac-segment');
        const fullIpInputI = document.getElementById('input-macEthernet');

        segmentsM.forEach((segment, index) => {
            segment.addEventListener('input', function() {
                segment.value = segment.value.toUpperCase();
                if (segment.value.length === segment.maxLength && index < segmentsM.length - 1) {
                    segmentsM[index + 1].focus(); // Mueve el foco al siguiente segmento
                }

                const macAddressI = Array.from(segmentsM).map(seg => seg.value).join(':');
                fullIpInputI.value = macAddressI;
            });

            segment.addEventListener('keydown', function(e) {
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
