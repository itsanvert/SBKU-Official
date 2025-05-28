<style>
    .mou-partners-wrapper {
        display: flex;
        flex-wrap: nowrap;
        gap: 1.5rem;
        overflow-x: auto;
        padding: 1rem 0;
    }

    .mou-partner-logo {
        flex: 0 0 auto;
        width: 180px; /* Adjust as needed */
        text-align: center;
    }

    .mou-partner-logo img {
        max-height: 90px;
        width: auto;
        max-width: 100%;
        margin-bottom: 1rem;
        filter: grayscale(30%);
        transition: all 0.5s ease;
    }

    /* Keep the rest of your existing CSS for hover and typography... */
    .hanuman-regular {
        font-family: "Hanuman", serif;
        font-weight: 400;
        -webkit-text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
    }
    .hanuman-bold {
        font-family: "Hanuman", serif;
        font-weight: 700;
        -webkit-text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
    }
    .mou-section {
        padding: 5rem 0;
        background-color: #ffffff;
        box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.03);
        display: flex;
        justify-content: center;
        -webkit-text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
    }
    .mou-partner-logo {
        position: relative;
        display: inline-block;
        overflow: hidden;
        padding: 1.5rem;
        margin-bottom: 1rem;
        border-radius: 8px;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .mou-partner-logo a {
        text-decoration: none;
        color: inherit;
        display: block;
    }
    .mou-partner-logo img {
        max-height: 90px;
        width: auto;
        max-width: 100%;
        margin-bottom: 1rem;
        filter: grayscale(30%);
        transition: all 0.5s ease;
    }
    .mou-partner-logo p {
        font-weight: 600;
        color: #444;
        font-size: 0.9rem;
        min-height: 40px;
        margin-top: 0.8rem;
        transition: all 0.3s ease;
    }
    .university-name {
        margin-bottom: 0.2rem;
    }
    .country-name {
        font-size: 0.8rem;
        color: #666;
        font-weight: normal;
    }
    .section-title {
        font-family: 'Hanuman', serif;
    -webkit-text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
    text-align: center;
    font-size: 2.5rem;
    font-weight: 800;
    color: #1e293b;
    margin-bottom: 3rem;
    position: relative;
    }
    .section-title:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, #003366, #3399cc);
    }
    .mou-partner-logo:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        background-color: #ffffff;
    }
    .mou-partner-logo:hover img {
        transform: scale(1.1) rotate(2deg);
        filter: grayscale(0%);
    }
    .mou-partner-logo:hover p {
        color: #003366;
    }
    .mou-partner-logo a:after {
        content: '{{ __("Visit Website") }}';
        position: absolute;
        bottom: 5px;
        left: 50%;
        transform: translateX(-50%) translateY(20px);
        font-size: 0.8rem;
        color: #3399cc;
        opacity: 0;
        transition: all 0.3s ease;
    }
    .mou-partner-logo:hover a:after {
        opacity: 1;
        transform: translateX(-50%) translateY(0);
    }
    .row {
        margin-top: 2rem;
    }
    .mou-container {
        width: 100%;
        max-width: 1140px;
    }
</style>

<section class="mou-section">
    <div class="mou-container">
        <div class="text-center mb-4">
            <h3 class="section-title hanuman-bold">{{ __('Our Partners') }}</h3>
            <div class="mou-partners-wrapper">
                <!-- Partner 1 -->
                <div class="mou-partner-logo">
                    <a href="https://www.mcut.edu.tw/?Lang=en" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('assets/img/mou-university-logo/MCUT.png') }}" alt="MCUT Logo">
                        <p class="hanuman-regular">
                            <span class="university-name">{{ __('MING CHI UNIVERSITY OF TECHNOLOGY') }}</span><br>
                            <span class="country-name">{{ __('TAIWAN') }}</span>
                        </p>
                    </a>
                </div>

                <!-- Partner 2 -->
                <div class="mou-partner-logo">
                    <a href="https://www.utar.edu.my/" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('assets/img/mou-university-logo/UTAR-University-Vector-logoquake.png') }}" alt="UTAR Logo">
                        <p class="hanuman-regular">
                            <span class="university-name">{{ __('UNIVERSITI TUNKU ABDUL RAHMAN') }}</span><br>
                            <span class="country-name">{{ __('MALAYSIA') }}</span>
                        </p>
                    </a>
                </div>

                <!-- Partner 3 -->
                <div class="mou-partner-logo">
                    <a href="https://en3.nhu.edu.tw/Web/Index" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('assets/img/mou-university-logo/Nanhua_University_logo.svg_-300x300.png') }}" alt="Nanhua Logo">
                        <p class="hanuman-regular">
                            <span class="university-name">{{ __('NANHUA UNIVERSITY') }}</span><br>
                            <span class="country-name">{{ __('TAIWAN') }}</span>
                        </p>
                    </a>
                </div>

                <!-- Partner 4 -->
                <div class="mou-partner-logo">
                    <a href="https://www-en.dila.edu.tw/" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('assets/img/mou-university-logo/Dharma Drum Institute of Liberal Art.png') }}" alt="DILA Logo" style="transform: scale(1.3);">
                        <p class="hanuman-regular">
                            <span class="university-name">{{ __('DHARMA DRUM INSTITUTE OF LIBERAL ARTS') }}</span><br>
                            <span class="country-name">{{ __('TAIWAN') }}</span>
                        </p>
                    </a>
                </div>

                <!-- Partner 5 -->
                <div class="mou-partner-logo">
                    <a href="https://www.jssc.edu.cn" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('assets/img/mou-university-logo/JiangSu Shipping College.png') }}" alt="JiangSu Logo">
                        <p class="hanuman-regular">
                            <span class="university-name">{{ __('JiangSu Shipping College') }}</span><br>
                            <span class="country-name">{{ __('Republic of China') }}</span>
                        </p>
                    </a>
                </div>

                <!-- Partner 6 -->
                <div class="mou-partner-logo">
                    <a href="https://help.edu.my/" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('assets/img/mou-university-logo/help-university-logo.png') }}" alt="Help Logo">
                        <p class="hanuman-regular">
                            <span class="university-name">{{ __('Help University') }}</span><br>
                            <span class="country-name">{{ __('MALAYSIA') }}</span>
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
