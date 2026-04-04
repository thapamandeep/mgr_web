@extends('layout.app')

@section('content')

<section class="culture-section">

    <div class="container">

        <h2 class="section-title">सांस्कृतिक सम्पदा</h2>

        <p class="section-subtitle">
            मगर समुदायको मौलिक संस्कृति, परम्परा र पहिचानको संरक्षण हाम्रो दायित्व हो।
        </p>

        <div class="culture-grid">

            <!-- Dance -->
            <div class="culture-card">
                <img src="{{ asset('img/dance-icon.jpg') }}" alt="Dance">
                <h3>नृत्य र संगीत</h3>
                <p>
                    मारुनी र सोरठी जस्ता लोकनृत्य तथा गीतसंगीतले हाम्रो सांस्कृतिक पहिचान झल्काउँछ।
                </p>
            </div>

            <!-- Dress -->
            <div class="culture-card">
                <img src="{{ asset('img/dress-icon.jpg') }}" alt="Dress">
                <h3>भेषभूषा</h3>
                <p>
                    हाम्रो पारम्परिक पोशाकले मगर समुदायको मौलिकता र सुन्दरता देखाउँछ।
                </p>
            </div>

            <!-- Festival -->
            <div class="culture-card">
                <img src="{{ asset('img/magar-festival.png') }}" alt="Festival">
                <h3>चाडपर्व</h3>
                <p>
                    माघे संक्रान्ति, भुमे पूजा जस्ता चाडपर्वहरूले एकता र भाइचारा मजबुत बनाउँछन्।
                </p>
            </div>

            <!-- Language -->
            <div class="culture-card">
                <img src="{{ asset('img/language.jpg') }}" alt="Language">
                <h3>भाषा</h3>
                <p>
                    मगर भाषा हाम्रो पहिचान हो, जसलाई संरक्षण गर्नु हाम्रो कर्तव्य हो।
                </p>
            </div>

        </div>

    </div>

</section>

@endsection