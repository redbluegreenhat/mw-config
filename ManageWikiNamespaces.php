<?php
/**
 * Additional settings to add to ManageWikiNamespaces are added using the variable below.
 *
 * Type can be either:
 *
 * check: adds a checkbox. Format: $var = $namespace_id;
 * text: adds a single line text entry. Format: [$var][$namespace_id] = $val;
 * vestyle: adds a checkbox. Format: [$var][$namespace_id] = true;
 *
 * Other variables that are required are name and from.
 *
 * name: the displayed name of the setting on Special:ManageWiki.
 * from: a text entry of which extension is required for this setting to work. If added by MediaWiki or a 'global' extension, use 'mediawiki'.
 * main: true or false. If false, this config will not appear for main namespaces.
 * talk: true or false. If false, this config will not appear for talk namespaces.
 * blacklisted: array of namespace ids to blacklist the config from.
 * overridedefault: a string/array override default when no existing value exist. Allows for namespace specific overrides with [ $ns_id => $value ] format.
 */
$wgManageWikiNamespacesAdditional = [
	'wgExtraSignatureNamespaces' => [
		'name' => 'Enable "Signature" button on the edit toolbar under both main and talk pages.',
		'type' => 'check',
		'from' => 'mediawiki',
		'main' => true,
		'talk' => false,
		'blacklisted' => [],
		'overridedefault' => [],
	],
	'wgCapitalLinkOverrides' => [
		'name' => 'Force the first letter of links to capitals. Overrides $wgCapitalLinks for this namespace.',
		'type' => 'vestyle',
		'from' => 'mediawiki',
		'main' => true,
		'talk' => false,
		'blacklisted' => [
			2,
			8,
		],
		'overridedefault' => [],
	],
	'egApprovedRevsEnabledNamespaces' => [
		'name' => 'Enable ApprovedRevs in this namespace?',
		'type' => 'vestyle',
		'from' => 'approvedrevs',
		'main' => true,
		'talk' => true,
		'blacklisted' => [],
		'overridedefault' => false
	],
	'wgWPBNamespaces' => [
		'name' => 'Enable WikidataPageBanner in this namespace?',
		'type' => 'check',
		'from' => 'wikidatapagebanner',
		'main' => true,
		'talk' => true,
		'blacklisted' => [],
		'overridedefault' => false
	],
	'wgCommentStreamsAllowedNamespaces' => [
		'name' => 'Can comments appear in this namespace?',
		'type' => 'check',
		'from' => 'commentstreams',
		'main' => true,
		'talk' => true,
		'blacklisted' => [],
		'overridedefault' => null,
	],
	'wgFlaggedRevsNamespaces' => [
		'name' => 'Enable FlaggedRevs in this namespace?',
		'type' => 'check',
		'from' => 'flaggedrevs',
		'main' => true,
		'talk' => false,
		'blacklisted' => [ 8 ],
		'overridedefault' => false
	],
	'wgVisualEditorAvailableNamespaces' => [
		'name' => 'Enable VisualEditor in this namespace?',
		'type' => 'vestyle',
		'from' => 'visualeditor',
		'main' => true,
		'talk' => true,
		'blacklisted' => [],
		'overridedefault' => false
	],
	'wgNamespacesToPostIn' => [
		'name' => 'Can MassMessage post messages in this namespace?',
		'type' => 'check',
		'from' => 'massmessage',
		'main' => true,
		'talk' => false,
		'blacklisted' => [],
		'overridedefault' => false
	],
	'wgTemplateSandboxEditNamespaces' => [
		'name' => 'Can TemplateSandbox be used in this namespace?',
		'type' => 'check',
		'from' => 'templatesandbox',
		'main' => true,
		'talk' => true,
		'blacklisted' => [],
		'overridedefault' => false
	],
];
