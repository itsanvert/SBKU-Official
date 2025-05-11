<link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@300;400;700&family=Siemreap&family=Noto+Sans+Khmer:wght@400;700&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@300;400;700&display=swap" rel="stylesheet">

<style>
    .section-brand_quickfact,
    .brand_quickfact-wrap,
    .brand_quickfact-content,
    .brand_quickfact-count_value,
    .brand_quickfact-label {
        font-family: "Hanuman", serif !important;
        -webkit-text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
    }

    .hanuman-regular {
        font-family: "Hanuman", serif !important;
        font-weight: 400 !important;
    }

    .hanuman-bold {
        font-family: "Hanuman", serif !important;
        font-weight: 700 !important;
    }

    .brand_quickfact-content {
        text-align: center;
        padding: 2rem;
    }

    .brand_quickfact-count_value {
        font-size: 3rem;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 0.5rem;
    }

    .brand_quickfact-label {
        font-size: 1.25rem;
        color: #ffffff;
    }

    @media (max-width: 768px) {
        .brand_quickfact-content {
            margin-bottom: 2rem;
        }
        .brand_quickfact-count_value {
            font-size: 2.5rem;
        }
        .brand_quickfact-label {
            font-size: 1rem;
        }
    }
</style>

<section class="section-brand_quickfact section">
    <div class="container">
        <div class="brand_quickfact-wrap">
            <div class="row">
                <div class="col-sm-4">
                    <div class="brand_quickfact-content font-2 text-center">
                        <div class="brand_quickfact-count_value hanuman-bold counter" data-count="1453">0</div>
                        <div class="brand_quickfact-label hanuman-regular">{{ __('Total Students') }}</div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="brand_quickfact-content font-2 text-center">
                        <div class="brand_quickfact-count_value hanuman-bold counter" data-count="53">0</div>
                        <div class="brand_quickfact-label hanuman-regular">{{ __('Staff') }}</div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="brand_quickfact-content font-2 text-center">
                        <div class="brand_quickfact-count_value hanuman-bold counter" data-count="65">0</div>
                        <div class="brand_quickfact-label hanuman-regular">{{ __('Professors') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

<script>
    $(document).ready(function () {
        function startCounter() {
            $('.counter').each(function () {
                const $this = $(this);
                const countTo = $this.attr('data-count');

                $({ countNum: 0 }).animate(
                    { countNum: countTo },
                    {
                        duration: 2000,
                        easing: 'swing',
                        step: function () {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.text(this.countNum);
                        },
                    }
                );
            });
        }

        const waypoint = new Waypoint({
            element: document.getElementsByClassName('section-brand_quickfact')[0],
            handler: function () {
                startCounter();
                this.destroy();
            },
            offset: '80%',
        });
    });
</script>