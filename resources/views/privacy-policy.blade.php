@extends('layouts.app')
@section('content')
    @include('inc.navbar', ['product_page' => true, 'footer' => $footer, 'locale' => $locale])
    <section>
        <div class="container">
            <div class="row flex-column">
                <div class="col-12">
                    <h2 class="text-center text-uppercase my-4">@lang('privacy policy')</h2>
                    <p class="mb-2 font-weight-normal">@lang('privacy_policy_text')</p>
                    <h4 class="mb-2">@lang('data_processing_purpose')</h4>
                    <p class="mb-2">@lang('data_processing_purpose_text')</p>
                    <h4 class="mb-2">@lang('identifiable_information_usage')</h4>
                    <p class="mb-2">@lang('identifiable_information_usage_text')</p>
                    <h4 class="mb-2">@lang('cookies')</h4>
                    <p class="mb-2">@lang('cookies_text')</p>
                    <h4 class="mb-2">@lang('third_party_links')</h4>
                    <p class="mb-2">@lang('third_party_links_text')</p>
                    <h4 class="mb-2">@lang('information_disclosure')</h4>
                    <p class="mb-2">@lang('information_disclosure_text')</p>
                    <h4 class="mb-2">@lang('information_correction')</h4>
                    <p class="mb-2">@lang('information_correction_text')</p>
                    <h4 class="mb-2">@lang('security')</h4>
                    <p class="mb-2">@lang('security_text')</p>
                    <h4 class="mb-2">@lang('privacy_policy_changes')</h4>
                    <p class="mb-2">@lang('privacy_policy_changes_text')</p>
                </div>
            </div>
        </div>
    </section>
    @include('inc.footer', ['footer' => $footer])
@endsection
