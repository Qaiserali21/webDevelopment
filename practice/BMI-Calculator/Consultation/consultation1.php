
<?php

include('header.php');

?>
    <body data-container="body"
          data-mage-init='{"loaderAjax": {}, "loader": { "icon": "https://consultation.my-bmi.co.uk/static/version1702452587/frontend/MyBMI/child/en_GB/images/loader-2.gif"}}'
        id="html-body" class="has-background-consultation-flow-background consultation-details-index page-layout-1column">
        <div class="d-flex flex-column justify-content-center align-items-center bg--white consultation-header-section p-2">
    <a class="f--cyan-dark" title="previous-page" id="surveyPrev" href="#"><i class="fas fa-arrow-left"></i></a>
    <a href="/" style="margin: auto; width: 200px"><img class="align-top" width="200" src="bmi-images/Weighloss_final_logo.png"></a>
</div>
<div class="page-wrapper"><main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
<div class="page messages"><div data-bind="scope: 'messages'">
    <!-- ko if: cookieMessages && cookieMessages.length > 0 -->
    <div aria-atomic="true" role="alert" data-bind="foreach: { data: cookieMessages, as: 'message' }" class="messages">
        <div data-bind="attr: {
            class: 'message-' + message.type + ' ' + message.type + ' message',
            'data-ui-id': 'message-' + message.type
        }">
            <div data-bind="html: $parent.prepareMessageForHtml(message.text)"></div>
        </div>
    </div>
    <!-- /ko -->

    <!-- ko if: messages().messages && messages().messages.length > 0 -->
    <div aria-atomic="true" role="alert" class="messages" data-bind="foreach: {
        data: messages().messages, as: 'message'
    }">
        <div data-bind="attr: {
            class: 'message-' + message.type + ' ' + message.type + ' message',
            'data-ui-id': 'message-' + message.type
        }">
            <div data-bind="html: $parent.prepareMessageForHtml(message.text)"></div>
        </div>
    </div>
    <!-- /ko -->
</div>
</div><div class="columns"><div class="column main"><input name="form_key" type="hidden" value="LiMSlWXrct67Yhpi" /><div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}">
        
</div>
<style>
    .password-strength-meter{
        background-color: white;
    }
    .password-weak .password-strength-meter, .password-none .password-strength-meter, .password-strength-meter{
        color: #DF8472;
    }
    .password-strong .password-strength-meter {
        color: #00b67a;
    }
    .password-medium .password-strength-meter {
        color: #e4832b;
    }
    .password-weak .password-strength-meter:before, .password-none .password-strength-meter:before, .password-medium .password-strength-meter:before, .password-strong .password-strength-meter:before{
        background-color: white;
    }

</style>

<div class="itl-container">
    <div class="itl-container__inner px-1">
        <div class="w-100">
            <h4 class="step-text-section w-100 text-center its-font-s--20 pt-3">4 Simple Steps</h4>
            <div class="steps mt-5 mb-1 is-tablet-medium">
                <div class="step-item is-active">
                    <div class="step-marker" style="background-color: #4DC4D8;"><span class="step-number-text">1</span><span class="icon-your-details-icon f--white-before"></span></div>
                    <div class="step-details">
                        <p class="step-title" style="color: #4DC4D8;">Your Details</p>
                    </div>
                </div>
                <div class="step-item">
                    <div class="step-marker" style="background-color: #4DC4D8;"><span class="step-number-text">2</span><span class="icon-consultation-icon"></span></div>
                    <div class="step-details">
                        <p class="step-title" style="color: #4DC4D8;">Consultation</p>
                    </div>
                </div>
                <div class="step-item">
                    <div class="step-marker" style="background-color: #4DC4D8;"><span class="step-number-text">3</span><span class="icon-your-treatment-icon"></span></div>
                    <div class="step-details">
                        <p class="step-title" style="color: #4DC4D8;">Your Treatment</p>
                    </div>
                </div>
                <div class="step-item">
                    <div class="step-marker" style="background-color: #4DC4D8;"><span class="step-number-text">4</span><span class="icon-checkout-icon"></span></div>
                    <div class="step-details">
                        <p class="step-title" style="color: #4DC4D8;">Checkout</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
 <div class="itl-container">
    <div class="itl-container__inner px-1">
        <div class="w-100">
            <div class="card p-md-3 bmi-calc d-flex flex-column align-items-center">
                <h3 class="title mt-5" style="color: #4DC4D8;">Calculate Your BMI</h3>
                <div class="unit-wrapper">
                    <div class="unit-switcher bmi-switcher d-flex" data="metric">
                        <span class="metric-text active" style="background: #4DC4D8;">Metric</span>
                        <span class="metric-text">Imperial</span>
                    </div>
                </div>
                <div class="cal-content rcw-form">
                    <div class="bmi-metric">
                        <div class="bmi-imperial-tab d-flex flex-column">
                            <label for="height" class="label w-100 text-left has-text-black">
                                <span>Height</span>
                            </label>
                            <div class="multicolorprogress-wrapper-height handle-height consultation-section ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                <div class="blueball ui-slider-handle ui-corner-all ui-state-default" id="progress-bar-height" style="left: 95%;" tabindex="0">
                                    120
                                </div>
                                <div class="imperial-height-label">
                                    <select id="height" placeholder="Height-cm" class="form-control">
                                        <option value="Height CM">Height CM</option>
                                        <option value="120">120</option>
                                                                                    <option value="121">121</option>
                                                                                    <option value="122">122</option>
                                                                                    <option value="123">123</option>
                                                                                    <option value="124">124</option>
                                                                                    <option value="125">125</option>
                                                                                    <option value="126">126</option>
                                                                                    <option value="127">127</option>
                                                                                    <option value="128">128</option>
                                                                                    <option value="129">129</option>
                                                                                    <option value="130">130</option>
                                                                                    <option value="131">131</option>
                                                                                    <option value="132">132</option>
                                                                                    <option value="133">133</option>
                                                                                    <option value="134">134</option>
                                                                                    <option value="135">135</option>
                                                                                    <option value="136">136</option>
                                                                                    <option value="137">137</option>
                                                                                    <option value="138">138</option>
                                                                                    <option value="139">139</option>
                                                                                    <option value="140">140</option>
                                                                                    <option value="141">141</option>
                                                                                    <option value="142">142</option>
                                                                                    <option value="143">143</option>
                                                                                    <option value="144">144</option>
                                                                                    <option value="145">145</option>
                                                                                    <option value="146">146</option>
                                                                                    <option value="147">147</option>
                                                                                    <option value="148">148</option>
                                                                                    <option value="149">149</option>
                                                                                    <option value="150">150</option>
                                                                                    <option value="151">151</option>
                                                                                    <option value="152">152</option>
                                                                                    <option value="153">153</option>
                                                                                    <option value="154">154</option>
                                                                                    <option value="155">155</option>
                                                                                    <option value="156">156</option>
                                                                                    <option value="157">157</option>
                                                                                    <option value="158">158</option>
                                                                                    <option value="159">159</option>
                                                                                    <option value="160">160</option>
                                                                                    <option value="161">161</option>
                                                                                    <option value="162">162</option>
                                                                                    <option value="163">163</option>
                                                                                    <option value="164">164</option>
                                                                                    <option value="165">165</option>
                                                                                    <option value="166">166</option>
                                                                                    <option value="167">167</option>
                                                                                    <option value="168">168</option>
                                                                                    <option value="169">169</option>
                                                                                    <option value="170">170</option>
                                                                                    <option value="171">171</option>
                                                                                    <option value="172">172</option>
                                                                                    <option value="173">173</option>
                                                                                    <option value="174">174</option>
                                                                                    <option value="175">175</option>
                                                                                    <option value="176">176</option>
                                                                                    <option value="177">177</option>
                                                                                    <option value="178">178</option>
                                                                                    <option value="179">179</option>
                                                                                    <option value="180">180</option>
                                                                                    <option value="181">181</option>
                                                                                    <option value="182">182</option>
                                                                                    <option value="183">183</option>
                                                                                    <option value="184">184</option>
                                                                                    <option value="185">185</option>
                                                                                    <option value="186">186</option>
                                                                                    <option value="187">187</option>
                                                                                    <option value="188">188</option>
                                                                                    <option value="189">189</option>
                                                                                    <option value="190">190</option>
                                                                                    <option value="191">191</option>
                                                                                    <option value="192">192</option>
                                                                                    <option value="193">193</option>
                                                                                    <option value="194">194</option>
                                                                                    <option value="195">195</option>
                                                                                    <option value="196">196</option>
                                                                                    <option value="197">197</option>
                                                                                    <option value="198">198</option>
                                                                                    <option value="199">199</option>
                                                                                    <option value="200">200</option>
                                                                                    <option value="201">201</option>
                                                                                    <option value="202">202</option>
                                                                                    <option value="203">203</option>
                                                                                    <option value="204">204</option>
                                                                                    <option value="205">205</option>
                                                                                    <option value="206">206</option>
                                                                                    <option value="207">207</option>
                                                                                    <option value="208">208</option>
                                                                                    <option value="209">209</option>
                                                                                    <option value="210">210</option>
                                                                                    <option value="211">211</option>
                                                                                    <option value="212">212</option>
                                                                                    <option value="213">213</option>
                                                                                    <option value="214">214</option>
                                                                                    <option value="215">215</option>
                                                                                    <option value="216">216</option>
                                                                                    <option value="217">217</option>
                                                                                    <option value="218">218</option>
                                                                                    <option value="219">219</option>
                                                                                    <option value="220">220</option>
                                                                                    <option value="221">221</option>
                                                                                    <option value="222">222</option>
                                                                                    <option value="223">223</option>
                                                                                    <option value="224">224</option>
                                                                                    <option value="225">225</option>
                                                                                    <option value="226">226</option>
                                                                                    <option value="227">227</option>
                                                                                    <option value="228">228</option>
                                                                                    <option value="229">229</option>
                                                                                    <option value="230">230</option>
                                                                                    <option value="231">231</option>
                                                                                    <option value="232">232</option>
                                                                                    <option value="233">233</option>
                                                                                    <option value="234">234</option>
                                                                                    <option value="235">235</option>
                                                                                    <option value="236">236</option>
                                                                                    <option value="237">237</option>
                                                                                    <option value="238">238</option>
                                                                                    <option value="239">239</option>
                                                                                    <option value="240">240</option>
                                                                                    <option value="241">241</option>
                                                                                    <option value="242">242</option>
                                                                                    <option value="243">243</option>
                                                                                    <option value="244">244</option>
                                                                                    <option value="245">245</option>
                                                                                    <option value="246">246</option>
                                                                                    <option value="247">247</option>
                                                                                    <option value="248">248</option>
                                                                                    <option value="249">249</option>
                                                                                    <option value="250">250</option>
                                                                                    <option value="251">251</option>
                                                                                    <option value="252">252</option>
                                                                                    <option value="253">253</option>
                                                                                    <option value="254">254</option>
                                                                                    <option value="255">255</option>
                                                                                    <option value="256">256</option>
                                                                                    <option value="257">257</option>
                                                                                    <option value="258">258</option>
                                                                                    <option value="259">259</option>
                                                                                    <option value="260">260</option>
                                                                                    <option value="261">261</option>
                                                                                    <option value="262">262</option>
                                                                                    <option value="263">263</option>
                                                                                    <option value="264">264</option>
                                                                                    <option value="265">265</option>
                                                                                    <option value="266">266</option>
                                                                                    <option value="267">267</option>
                                                                                    <option value="268">268</option>
                                                                                    <option value="269">269</option>
                                                                                    <option value="270">270</option>
                                                                                    <option value="271">271</option>
                                                                                    <option value="272">272</option>
                                                                                    <option value="273">273</option>
                                                                                    <option value="274">274</option>
                                                                                    <option value="275">275</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="bmi-imperial-tab d-flex flex-column">
                            <label for="height" class="label w-100 text-left has-text-black">
                                <span>Weight</span>
                            </label>
                            <div class="multicolorprogress-wrapper-height handle-height consultation-section ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                <div class="blueball ui-slider-handle ui-corner-all ui-state-default d: none" id="progress-bar-height" style="left: 29.0323%; " tabindex="0">
                                    120
                                </div>
                                <div class="imperial-height-label">
                                    <select id="height" placeholder="Height-cm" class="form-control">
                                        <option value="Height CM">Weight (kg)</option>
                                        <option value="55">55</option>
                                        <option value="55">55</option>
                                        <option value="56">56</option>
                                        <option value="57">57</option>
                                        <option value="58">58</option>
                                        <option value="59">59</option>
                                        <option value="60">60</option>
                                        <option value="61">61</option>
                                        <option value="62">62</option>
                                        <option value="63">63</option>
                                        <option value="64">64</option>
                                        <option value="65">65</option>
                                        <option value="66">66</option>
                                        <option value="67">67</option>
                                        <option value="68">68</option>
                                        <option value="69">69</option>
                                        <option value="70">70</option>
                                        <option value="71">71</option>
                                        <option value="72">72</option>
                                        <option value="73">73</option>
                                        <option value="74">74</option>
                                        <option value="75">75</option>
                                        <option value="76">76</option>
                                        <option value="77">77</option>
                                        <option value="78">78</option>
                                        <option value="79">79</option>
                                        <option value="80">80</option>
                                        <option value="81">81</option>
                                        <option value="82">82</option>
                                        <option value="83">83</option>
                                        <option value="84">84</option>
                                        <option value="85">85</option>
                                        <option value="86">86</option>
                                        <option value="87">87</option>
                                        <option value="88">88</option>
                                        <option value="89">89</option>
                                        <option value="90">90</option>
                                        <option value="91">91</option>
                                        <option value="92">92</option>
                                        <option value="93">93</option>
                                        <option value="94">94</option>
                                        <option value="95">95</option>
                                        <option value="96">96</option>
                                        <option value="97">97</option>
                                        <option value="98">98</option>
                                        <option value="99">99</option>
                                        <option value="100">100</option>
                                        <option value="101">101</option>
                                        <option value="102">102</option>
                                        <option value="103">103</option>
                                        <option value="104">104</option>
                                        <option value="105">105</option>
                                        <option value="106">106</option>
                                        <option value="107">107</option>
                                        <option value="108">108</option>
                                        <option value="109">109</option>
                                        <option value="110">110</option>
                                        <option value="111">111</option>
                                        <option value="112">112</option>
                                        <option value="113">113</option>
                                        <option value="114">114</option>
                                        <option value="115">115</option>
                                        <option value="116">116</option>
                                        <option value="117">117</option>
                                        <option value="118">118</option>
                                        <option value="119">119</option>
                                        <option value="120">120</option>
                                        <option value="121">121</option>
                                        <option value="122">122</option>
                                        <option value="123">123</option>
                                        <option value="124">124</option>
                                        <option value="125">125</option>
                                        <option value="126">126</option>
                                        <option value="127">127</option>
                                        <option value="128">128</option>
                                        <option value="129">129</option>
                                        <option value="130">130</option>
                                        <option value="131">131</option>
                                        <option value="132">132</option>
                                        <option value="133">133</option>
                                        <option value="134">134</option>
                                        <option value="135">135</option>
                                        <option value="136">136</option>
                                        <option value="137">137</option>
                                        <option value="138">138</option>
                                        <option value="139">139</option>
                                        <option value="140">140</option>
                                        <option value="141">141</option>
                                        <option value="142">142</option>
                                        <option value="143">143</option>
                                        <option value="144">144</option>
                                        <option value="145">145</option>
                                        <option value="146">146</option>
                                        <option value="147">147</option>
                                        <option value="148">148</option>
                                        <option value="149">149</option>
                                        <option value="150">150</option>
                                        <option value="151">151</option>
                                        <option value="152">152</option>
                                        <option value="153">153</option>
                                        <option value="154">154</option>
                                        <option value="155">155</option>
                                        <option value="156">156</option>
                                        <option value="157">157</option>
                                        <option value="158">158</option>
                                        <option value="159">159</option>
                                        <option value="160">160</option>
                                        <option value="161">161</option>
                                        <option value="162">162</option>
                                        <option value="163">163</option>
                                        <option value="164">164</option>
                                        <option value="165">165</option>
                                        <option value="166">166</option>
                                        <option value="167">167</option>
                                        <option value="168">168</option>
                                        <option value="169">169</option>
                                        <option value="170">170</option>
                                        <option value="171">171</option>
                                        <option value="172">172</option>
                                        <option value="173">173</option>
                                        <option value="174">174</option>
                                        <option value="175">175</option>
                                        <option value="176">176</option>
                                        <option value="177">177</option>
                                        <option value="178">178</option>
                                        <option value="179">179</option>
                                        <option value="180">180</option>
                                        <option value="181">181</option>
                                        <option value="182">182</option>
                                        <option value="183">183</option>
                                        <option value="184">184</option>
                                        <option value="185">185</option>
                                        <option value="186">186</option>
                                        <option value="187">187</option>
                                        <option value="188">188</option>
                                        <option value="189">189</option>
                                        <option value="190">190</option>
                                        <option value="191">191</option>
                                        <option value="192">192</option>
                                        <option value="193">193</option>
                                        <option value="194">194</option>
                                        <option value="195">195</option>
                                        <option value="196">196</option>
                                        <option value="197">197</option>
                                        <option value="198">198</option>
                                        <option value="199">199</option>
                                        <option value="200">200</option>
                                        <option value="201">201</option>
                                        <option value="202">202</option>
                                        <option value="203">203</option>
                                        <option value="204">204</option>
                                        <option value="205">205</option>
                                        <option value="206">206</option>
                                        <option value="207">207</option>
                                        <option value="208">208</option>
                                        <option value="209">209</option>
                                        <option value="210">210</option>
                                        <option value="211">211</option>
                                        <option value="212">212</option>
                                        <option value="213">213</option>
                                        <option value="214">214</option>
                                        <option value="215">215</option>
                                        <option value="216">216</option>
                                        <option value="217">217</option>
                                        <option value="218">218</option>
                                        <option value="219">219</option>
                                        <option value="220">220</option>
                                        <option value="221">221</option>
                                        <option value="222">222</option>
                                        <option value="223">223</option>
                                        <option value="224">224</option>
                                        <option value="225">225</option>
                                        <option value="226">226</option>
                                        <option value="227">227</option>
                                        <option value="228">228</option>
                                        <option value="229">229</option>
                                        <option value="230">230</option>
                                        <option value="231">231</option>
                                        <option value="232">232</option>
                                        <option value="233">233</option>
                                        <option value="234">234</option>
                                        <option value="235">235</option>
                                        <option value="236">236</option>
                                        <option value="237">237</option>
                                        <option value="238">238</option>
                                        <option value="239">239</option>
                                        <option value="240">240</option>
                                        <option value="241">241</option>
                                        <option value="242">242</option>
                                        <option value="243">243</option>
                                        <option value="244">244</option>
                                        <option value="245">245</option>
                                        <option value="246">246</option>
                                        <option value="247">247</option>
                                        <option value="248">248</option>
                                        <option value="249">249</option>
                                        <option value="250">250</option>
                                        <option value="251">251</option>
                                        <option value="252">252</option>
                                        <option value="253">253</option>
                                        <option value="254">254</option>
                                        <option value="255">255</option>
                                        <option value="256">256</option>
                                        <option value="257">257</option>
                                        <option value="258">258</option>
                                        <option value="259">259</option>
                                        <option value="260">260</option>
                                        <option value="261">261</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bmi-imperial" style=>
                    <div class="bmi-imperial-tab d-flex flex-column">
                    <div class="control">
                    <div class="multicolorprogress-wrapper-bmi-height imperial-handle-height consultation-section ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                    <div class="blueball ui-slider-handle ui-corner-all ui-state-default" style="left: 95%;" tabindex="0">
                    120
                    </div>
                    <div class="imperial-height-data bmi-imperial-set d-flex">
                    <div class="imperial-height-label w-50 mr-2">
                    <label for="height" class="label w-100 text-left has-text-black">
                    <span>Height Feet</span>
                    </label>
                    <select id=""></select>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="card-content pt-0 justify-content-center d-flex pb-4 mt-5">
                        <a href="consultation2.php"><button id="proceedBtn" class="proceedBtn">Proceed</button></a>
                    </div>
                </div>
            </div>
            <div class="card mt-5 bmi-calc">
                <div class="card-content p-4">
                    <h5 class="title is-5 text-center mt-3" style="color: #4DC4D8;">myBMI</h5>
                    <div class="d-flex justify-content-center">
                        <div class="box d-flex justify-content-center align-items-center roundmybmi mb-3 high-risk">
                            <P class="title has-text-white is-3" id="result">
                                <span>34</span>
                            </P>
                        </div>
                    </div>
                    <div class="card-content p-5 p-sm-5" style="background-color: #ecfcfb">
                        <div class="multicolorprogress-wrapper consultation-section handle-result ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" style="pointer-events: none;">
                        <div class="multicolorprogress">
                            <div class="step step-1">
                                <span class="step__label">Safest BMI</span>
                            </div>
                            <div class="step step-2">
                                <span class="step__label">Safer BMI</span>
                            </div>
                            <div class="step step-3">
                                <span class="step__label">High-risk BMI</span>
                            </div>
                            <div class="blueball ui-slider-handle ui-corner-all ui-state-default" id="progress-bar-bmi" style="left: 83%;" tabindex="0">0</div>
                        </div>
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
 </div>
<!-- For restriction pop-up for Nothern IE postcode in UK sotre. -->
<div id="popup-modal" style="display:none;">
    <h3>
        Unfortunately we are unable to ship to this post code,  if you are looking for shipping to Northern Ireland, please goto our Ireland Store.    </h3>
</div>
    <style>
        #customer-popup-login-form {
            font-family: 'Montserrat', sans-serif;
        }
        .customer-popup-login {
            display: none;
        }
        .or-another-selection {
            display: inline-block;
            padding-right: 5px;
        }
        @media(max-width: 767px) {
            .or-another-selection {
                display: block;
                text-align: center;
                margin-bottom: 5px;
            }
        }
    </style>
    <div id="customer-popup-login" class="customer-popup-login">
        <div class="block block-customer-login">
            <div class="block-content" aria-labelledby="block-customer-popup-login-heading">
                <form class="form form-login"
                      action="https://consultation.my-bmi.co.uk/customer/ajax/login/"
                      method="post"
                      id="customer-popup-login-form"
                      data-mage-init='{"validation":{}}'>
                    <input name="form_key" type="hidden" value="LiMSlWXrct67Yhpi" /><input type="hidden" name="redirect_url" value="https://consultation.my-bmi.co.uk/consultation/details/index/condition/1/" />
                    <fieldset class="fieldset login" data-hasrequired="* Required Fields">
                        <div class="messages"></div>
                        <div class="field email required d-flex flex-column">
                            <label class="label has-text-black w-100 pl-0 text-left mb-2">Email address</label>
                            <div class="control">
                                <input name="username" value=""  autocomplete="off" id="email-login" type="email" class="input-text bg--white its-input-text__input" title="Email" placeholder="Email" data-validate="{required:true, 'validate-email':true}">
                            </div>
                        </div>
                        <div class="field password required d-flex flex-column">
                            <label class="label has-text-black w-100 pl-0 text-left mb-2">Password</label>
                            <div class="control">
                                <input name="password" type="password"  autocomplete="off" class="input-text bg--white its-input-text__input" id="pass-login" title="Password" placeholder="Password" data-validate="{required:true}" >
                            </div>
                        </div>
                        <div class="actions-toolbar d-flex flex-column mt-4">
                            <div class="primary"><button type="submit" class="button is-secondary w-100" name="send" id="send2-login"><span>Sign In</span></button></div>
                                                            <!-- <div class="or-another-selection">or</div> -->
                                                        <div class="forgotpasslink text-center mt-2"><a href="https://consultation.my-bmi.co.uk/customer/account/forgotpassword/">Forgot Your Password?</a>
                            </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
<!-- Reviews.co.uk Rich Snippet -->
</div> 

<script>
    $(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});
</script>
    </body>
</html>
