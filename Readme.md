# FLoC off

This small TYPO3 extension does nothing more than to add a `Permissions-Policy: interest-cohort=()` to every
HTTP response sent by your TYPO3 website.

## Why?

Read https://cleanuptheweb.org/ on why this header can improve the privacy of your visitors, users and customers.

The EFF on says "[Google’s FLoC Is a Terrible Idea](https://www.eff.org/deeplinks/2021/03/googles-floc-terrible-idea)".
WordPress is considering to [treat FLoC as a security concern](https://make.wordpress.org/core/2021/04/18/proposal-treat-floc-as-a-security-concern/).

## How?

Install this TYPO3 Extension using `composer req smic/flocoff`. Currently it is compatible with TYPO3 v10 and v11.
