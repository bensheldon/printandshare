# Print and Share
[http://printandshare.org](http://printandshare.org) 

Print and Share enables teachers to easily create beautiful & printable handouts to advertise their DonorsChoose projects.

[http://printandshare.org](http://printandshare.org) 

This website was created for DonorsChoose.org's Hacking Education Contest. We designed this web app to enable teachers to more easily create flyers and handouts to spread awareness locally about their project. Not everyone is a social media ninja.

## Contact

Ben Sheldon<br />
[bensheldon@gmail.com](mailto:bensheldon@gmail.com)

## Installation & Configuration

1. Download the repository and add it locally for (W/M/L)AMP development
2. Rename `app/config/core.php.default` to `app/config/core.php' and modify
	- `Security.salt` with a unique string
	- `Security.cipherSeed` with a unique numeric string
	- Update `bitly.login` and `bitly.key` with your own bitly account info
3. Rename `app/config/database.php.default` to `app/config/database.php' and modify
	- Update the `$default` datasource with you MySQL database settigs
	- Update the `$donorschoose` datasource with your DonorsChoose API key
4. Load the `database_schema.sql` into your MySQL database