<?php
class SpecialPageAllContributions extends SpecialPage {
	function __construct() {
        // Globals
		//global $wgXXXX;

        parent::__construct( 'AllContributions');

        return true;
    }


    //
	function execute( $par ) {

        // Globals
		//global $wgXXXX;

		$request = $this->getRequest();
		$output = $this->getOutput();
		$user = $this->getUser();

        // Permissions check
		if ( !$this->userCanExecute( $user ) ) {
			$this->displayRestrictionError();
			return;
		}

        // Output Regular Wiki headers
		$this->setHeaders();

        // Manually set title, otherwise it will be pulled from i18n/xx.json:"allcontributions"
        /*
            $pageTitle = "Manually Set Page Title";
            $output->setPageTitle( $pageTitle );
        */

        $output->addWikiTextAsInterface( '== ' . wfMessage( 'allcontributions-generatedoutput-title' ) . ' ==' );

        // SIMILAR QUERY:  select rev_timestamp, rev_actor, page_title from kek_revision inner join kek_page on kek_revision.rev_page = kek_page.page_id  order by rev_timestamp asc ;
        $pager = new AllContributionsPager( );//$y, $m, $tagFilter, $conds, $d );
        $line1 = $pager->getNavigationBar();
        $line2 = $pager->getBody();
        $line3 = $pager->getNavigationBar();
        $output->addHTML(
                 $line1 .
                 $line2 .
                 $line3
        );

	}

	function trySubmit( $formData ) {
		# Always display the form.
		return false;
	}

	protected function getGroupName() {
		return 'wiki';
	}
}
