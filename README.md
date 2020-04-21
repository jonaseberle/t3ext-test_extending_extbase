This maps existing tables to custom Extbase domain models in TYPO3v10.

In this example the models are extending existing models.

It showcases accessing existing as well as added fields.

Installing it will remove existing frontend output and output `fe_users` and `fe_groups` queried from the custom Extbase domain repository. It won't change any data.


#### References for `ext_typoscript_settings.txt` upgrade path:

https://docs.typo3.org/c/typo3/cms-core/master/en-us/Changelog/10.0/Breaking-87623-ReplaceConfigpersistenceclassesTyposcriptConfiguration.html

https://docs.typo3.org/c/typo3/cms-core/master/en-us/Changelog/9.5/Deprecation-86270-ExtbaseXclassViaTypoScriptSettings.html
(not used here)
