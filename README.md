AllContributions SpecialPage Extension  
Copyright (C) 2020 Lucien Murray-Pitts

What is this?
Shows every single edit in the wiki for ALL editors.
This is very similar to Special:Contributions
(https://www.mediawiki.org/wiki/Help:User_contributions/en)
Code was cribbed form SecureHTML and Special:Contributions

But also useful as a minimal reference to those wanting to make
their own Special:XXX page.

Why?  
Our wiki is edited so infrequently by a few global
wanderers.  Recent changes, and contribution pages, and logs dont
show everything and often expire but we want to know who did what
recently. (Special:RecentChanges, Special:Log, Special:Contributions)

How to use?  
Include into your LocalSettings.php;  
  wfLoadExtension( 'AllContributions' );

How to edit yourself?  
Performing checks on the JSON/PHP you can use the following:
 * JSON Checking;  
   npn install  
   grunt test  

 * PHP Linting;  
   composer install  
   composer test  

Extended reading for the Query tables/columns: 
* Schema/type; https://www.mediawiki.org/wiki/Manual:Extension.json/Schema#type
* Page Table; https://www.mediawiki.org/wiki/Manual:Page_table
* Revision Table; https://www.mediawiki.org/wiki/Manual:Revision_table

See also:  
* Discussion Topic here; https://www.mediawiki.org/wiki/Topic:Svz1gicvjzg6wvo8


