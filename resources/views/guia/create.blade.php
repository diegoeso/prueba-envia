<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Guias') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <button class="btn btn-info ml-3 mt-2" id="generar_guia">Generar guia</button>
                <div class="p-6 bg-white border-b border-gray-200">
                   <pre class="language-php"><code class="language-php highlighted-code__code"><span class="token operator">&lt;</span><span class="token operator">?</span>php
                    $client <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">Client</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
                    $headers <span class="token operator">=</span> <span class="token punctuation">[</span>
                      <span class="token string">'Content-Type'</span> <span class="token operator">=&gt;</span> <span class="token string">'application/json'</span><span class="token punctuation">,</span>
                      <span class="token string">'Authorization'</span> <span class="token operator">=&gt;</span> <span class="token string">'Bearer &lt;Token&gt;'</span>
                    <span class="token punctuation">]</span><span class="token punctuation">;</span>
                    $body <span class="token operator">=</span> '<span class="token punctuation">{</span>
                      <span class="token string-property property">"origin"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
                        <span class="token string-property property">"name"</span><span class="token operator">:</span> <span class="token string">"oscar mx"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"company"</span><span class="token operator">:</span> <span class="token string">"oskys factory"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"email"</span><span class="token operator">:</span> <span class="token string">"osgosf8@gmail.com"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"phone"</span><span class="token operator">:</span> <span class="token string">"8116300800"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"street"</span><span class="token operator">:</span> <span class="token string">"av vasconcelos"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"number"</span><span class="token operator">:</span> <span class="token string">"1400"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"district"</span><span class="token operator">:</span> <span class="token string">"mirasierra"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"city"</span><span class="token operator">:</span> <span class="token string">"Monterrey"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"state"</span><span class="token operator">:</span> <span class="token string">"NL"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"country"</span><span class="token operator">:</span> <span class="token string">"MX"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"postalCode"</span><span class="token operator">:</span> <span class="token string">"66236"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"reference"</span><span class="token operator">:</span> <span class="token string">""</span>
                      <span class="token punctuation">}</span><span class="token punctuation">,</span>
                      <span class="token string-property property">"destination"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
                        <span class="token string-property property">"name"</span><span class="token operator">:</span> <span class="token string">"oscar"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"company"</span><span class="token operator">:</span> <span class="token string">"empresa"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"email"</span><span class="token operator">:</span> <span class="token string">"osgosf8@gmail.com"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"phone"</span><span class="token operator">:</span> <span class="token string">"8116300800"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"street"</span><span class="token operator">:</span> <span class="token string">"av vasconcelos"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"number"</span><span class="token operator">:</span> <span class="token string">"1400"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"district"</span><span class="token operator">:</span> <span class="token string">"palo blanco"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"city"</span><span class="token operator">:</span> <span class="token string">"monterrey"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"state"</span><span class="token operator">:</span> <span class="token string">"NL"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"country"</span><span class="token operator">:</span> <span class="token string">"MX"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"postalCode"</span><span class="token operator">:</span> <span class="token string">"66240"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"reference"</span><span class="token operator">:</span> <span class="token string">""</span>
                      <span class="token punctuation">}</span><span class="token punctuation">,</span>
                      <span class="token string-property property">"packages"</span><span class="token operator">:</span> <span class="token punctuation">[</span>
                        <span class="token punctuation">{</span>
                          <span class="token string-property property">"content"</span><span class="token operator">:</span> <span class="token string">"camisetas rojas"</span><span class="token punctuation">,</span>
                          <span class="token string-property property">"amount"</span><span class="token operator">:</span> <span class="token number">2</span><span class="token punctuation">,</span>
                          <span class="token string-property property">"type"</span><span class="token operator">:</span> <span class="token string">"box"</span><span class="token punctuation">,</span>
                          <span class="token string-property property">"dimensions"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
                            <span class="token string-property property">"length"</span><span class="token operator">:</span> <span class="token number">2</span><span class="token punctuation">,</span>
                            <span class="token string-property property">"width"</span><span class="token operator">:</span> <span class="token number">5</span><span class="token punctuation">,</span>
                            <span class="token string-property property">"height"</span><span class="token operator">:</span> <span class="token number">5</span>
                          <span class="token punctuation">}</span><span class="token punctuation">,</span>
                          <span class="token string-property property">"weight"</span><span class="token operator">:</span> <span class="token number">63</span><span class="token punctuation">,</span>
                          <span class="token string-property property">"insurance"</span><span class="token operator">:</span> <span class="token number">0</span><span class="token punctuation">,</span>
                          <span class="token string-property property">"declaredValue"</span><span class="token operator">:</span> <span class="token number">400</span><span class="token punctuation">,</span>
                          <span class="token string-property property">"weightUnit"</span><span class="token operator">:</span> <span class="token string">"KG"</span><span class="token punctuation">,</span>
                          <span class="token string-property property">"lengthUnit"</span><span class="token operator">:</span> <span class="token string">"CM"</span>
                        <span class="token punctuation">}</span><span class="token punctuation">,</span>
                        <span class="token punctuation">{</span>
                          <span class="token string-property property">"content"</span><span class="token operator">:</span> <span class="token string">"camisetas rojas"</span><span class="token punctuation">,</span>
                          <span class="token string-property property">"amount"</span><span class="token operator">:</span> <span class="token number">2</span><span class="token punctuation">,</span>
                          <span class="token string-property property">"type"</span><span class="token operator">:</span> <span class="token string">"box"</span><span class="token punctuation">,</span>
                          <span class="token string-property property">"dimensions"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
                            <span class="token string-property property">"length"</span><span class="token operator">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
                            <span class="token string-property property">"width"</span><span class="token operator">:</span> <span class="token number">17</span><span class="token punctuation">,</span>
                            <span class="token string-property property">"height"</span><span class="token operator">:</span> <span class="token number">2</span>
                          <span class="token punctuation">}</span><span class="token punctuation">,</span>
                          <span class="token string-property property">"weight"</span><span class="token operator">:</span> <span class="token number">5</span><span class="token punctuation">,</span>
                          <span class="token string-property property">"insurance"</span><span class="token operator">:</span> <span class="token number">400</span><span class="token punctuation">,</span>
                          <span class="token string-property property">"declaredValue"</span><span class="token operator">:</span> <span class="token number">400</span><span class="token punctuation">,</span>
                          <span class="token string-property property">"weightUnit"</span><span class="token operator">:</span> <span class="token string">"KG"</span><span class="token punctuation">,</span>
                          <span class="token string-property property">"lengthUnit"</span><span class="token operator">:</span> <span class="token string">"CM"</span>
                        <span class="token punctuation">}</span>
                      <span class="token punctuation">]</span><span class="token punctuation">,</span>
                      <span class="token string-property property">"shipment"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
                        <span class="token string-property property">"carrier"</span><span class="token operator">:</span> <span class="token string">"fedex"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"service"</span><span class="token operator">:</span> <span class="token string">"express"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"type"</span><span class="token operator">:</span> <span class="token number">1</span>
                      <span class="token punctuation">}</span><span class="token punctuation">,</span>
                      <span class="token string-property property">"settings"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
                        <span class="token string-property property">"printFormat"</span><span class="token operator">:</span> <span class="token string">"PDF"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"printSize"</span><span class="token operator">:</span> <span class="token string">"STOCK_4X6"</span><span class="token punctuation">,</span>
                        <span class="token string-property property">"comments"</span><span class="token operator">:</span> <span class="token string">"comentarios de el envío"</span>
                      <span class="token punctuation">}</span>
                    <span class="token punctuation">}</span>'<span class="token punctuation">;</span>
                    $request <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">Request</span><span class="token punctuation">(</span><span class="token string">'POST'</span><span class="token punctuation">,</span> <span class="token string">'https://api.envia.com/ship/generate/'</span><span class="token punctuation">,</span> $headers<span class="token punctuation">,</span> $body<span class="token punctuation">)</span><span class="token punctuation">;</span>
                    $res <span class="token operator">=</span> $client<span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">sendAsync</span><span class="token punctuation">(</span>$request<span class="token punctuation">)</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">wait</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
                    echo $res<span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">getBody</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
                    </code></pre>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).on('click', '#generar_guia', function(event) {
          event.preventDefault();
          $.ajax({
              url: '{{ route('guias.store') }}',
              type: 'POST',
              dataType: 'json',
          })
          .done(function(res) {
              alert('Nueva guia generada')
          })
          .fail(function() {
              console.log("error");
          })
          .always(function() {
              console.log("complete");
          });
          
        });
    </script>
</x-app-layout>
