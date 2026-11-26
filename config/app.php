<?php
/*
 * Site settings. Change these per environment (local, staging, live).
 */
return [
    // Where the page lives on the domain. '' = domain root, '/hybrid-pgdm' = welingkar.org/hybrid-pgdm
    // Leave as null to detect it automatically from the server.
    'base_path' => null,

    // Full public address, used for the canonical link, social previews and structured data.
    'canonical_url' => 'https://www.welingkar.org/hybrid-pgdm/',

    'site_name' => 'Welingkar Institute of Management (WeSchool)',

    // Lead form: the ExtraaEdge CRM widget. It renders into <div id="{form_id}">.
    // Confirm with the CRM team that this form accepts submissions from the welingkar.org domain.
    'crm' => [
        'form_id'    => 'ee-form-24',
        'script_src' => 'https://eeconfigstaticfiles.blob.core.windows.net/staticfiles/yangpoob2c/ee-form-widget/form-24/widget.js',
    ],

    // Brochure PDF. Leave '' to send the button to the enquiry form instead.
    'brochure_url' => '',

    'phone_primary' => '18005478003',

    // Analytics and ads. Leave '' to switch a tag off.
    'gtm_id'       => '',   // e.g. GTM-XXXXXXX
    'meta_pixel'   => '',

    // Show the "design preview" ribbon and placeholder markers. Set false on the live site.
    'show_placeholders' => true,

    'debug' => false,
];
