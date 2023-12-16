{$total = $onboarding_guide_progress.total_steps}
{$completed = $onboarding_guide_progress.completed_steps}
{$percentage = $onboarding_guide_progress.percentage}

<div class="onboarding_section__progress" id="og-progress-container">
  <div class="onboarding_section__progress_header">
    <span class="onboarding_section__progress_text" id="og-progress-text">{__("onboarding_guide.completed_steps_progress", ["[completed]" => $completed, "[total]" => $total])}</span>
    {hook name="onboarding_guide:progress_menu"}
    <div class="btn-group dropleft">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <span class="dropdown-icon icon-ellipsis-vertical icon-large more-btn"></span>
      </a>
      <ul class="dropdown-menu">
          <li>
            <a href="" id="og-dismiss-button">{__('onboarding_guide.dismiss')}</a>
          </li>
          {if $onboarding_guide_progress.completed_steps}
            <li>
                <a href="{"onboarding_guide.restart"|fn_url}" id="og-reset-button">{__('onboarding_guide.reset')}</a>
            </li>
          {/if}
      </ul>
    </div>
    {/hook}
  </div>
  <div class="onboarding_section__progress_bar">
    <div class="onboarding_section__progress_bar_line" id="og-progressbar" style="width: {$percentage}%"></div>
  </div>
<!--og-progress-container--></div>