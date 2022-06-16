@if(\Astrogoat\Greenhouse\Settings\GreenhouseSettings::isEnabled())
    <script src="https://boards.greenhouse.io/embed/job_board/js?for={{settings(\Astrogoat\Greenhouse\Settings\GreenhouseSettings::class, 'business')}}"></script>
@endif
