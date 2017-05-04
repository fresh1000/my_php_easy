#!E:/Perl64/bin/perl.exe -w

use DBI;
use CGI;
use strict; 
use warnings; 

my $query=new CGI;

print CGI::header();

print "Content-type: text/html\n\n";
print "<H2>BD: Apartments_for_sale</H2>";
my $dsn = 'DBI:mysql:Market:localhost';
my $db_user_name = 'root';
my $db_password = '';
my ($id, $password);
my $dbh = DBI->connect($dsn, $db_user_name, $db_password)or die "Couldn't connect to database: " . DBI->errstr;



my $t = $query->param("t"); 
if ($t eq "save") { 
	my $money = $query->param("money");
	my $fio = $query->param("fio"); 
	my $group = $query->param("group"); 
	my $lab = $query->param("lab");

	if ($money eq "product"){
		my $sthss = $dbh->prepare("INSERT INTO product VALUES(?,?,?)"); 
		$sthss->execute($fio, $group, $lab); 
		$sthss = $dbh->prepare("SELECT * FROM product"); 
		$sthss->execute();  
	}
	
	if ($money eq "Bayers"){
		my $sthss = $dbh->prepare("INSERT INTO Bayers VALUES(?,?,?)"); 
		$sthss->execute($fio, $group, $lab); 
		$sthss = $dbh->prepare("SELECT * FROM Bayers"); 
		$sthss->execute();  
	}

	if ($money eq "Spects"){
		my $sthss = $dbh->prepare("INSERT INTO Spects VALUES(null,?,?,?)"); 
		$sthss->execute($fio, $group, $lab); 
		$sthss = $dbh->prepare("SELECT * FROM Spects"); 
		$sthss->execute();  
	}
}

my $sth = $dbh->prepare("Select * from Spects");
$sth->execute;

my $sthBayers = $dbh->prepare("Select * from Bayers");
$sthBayers->execute;

my $sthCLIENT = $dbh->prepare("Select * from product");
$sthCLIENT->execute;

print "<H3>TB: Spects</H3>";
print '<html><body><table border="3">';
print "<tr><td><b>id</b></td><td><b>Adress</b></td><td><b>sq</b></td><td><b>id_prod</b></td></tr>";

while (my $ref = $sth->fetchrow_arrayref) {
	print "<tr>";
	print "<td> $$ref[0] </td><td> $$ref[1] </td><td> $$ref[2] </td><td> $$ref[3] </td> "; 
	print "</tr>";
}
print '</table></body></html>';

#Bayers
print "<H3>TB: Bayers</H3>";
print '<html><body><table border="3">';
print "<tr><td><b>id</b></td><td><b>Name</b></td><td><b>Prod_kv</b></td></tr>";

while (my $ref = $sthBayers->fetchrow_arrayref) {
	print "<tr>";
	print "<td> $$ref[0] </td><td> $$ref[1] </td><td> $$ref[2] </td> "; 
	print "</tr>";
}
print '</table></body></html>';

print "<H3>TB: Client</H3>";
print '<html><body><table border="3">';
print "<tr><td><b>id</b></td><td><b>Name</b></td><td><b>id_prod</b></td></tr>";

while (my $ref = $sthCLIENT->fetchrow_arrayref) {
	print "<tr>";
	print "<td> $$ref[0] </td><td> $$ref[1] </td><td> $$ref[2] </td> "; 
	print "</tr>";
}
print '</table></body></html>';


 

my $rc = $sth->finish;
$rc = $dbh->disconnect;

print "<html><head></head><body> 
      <form action='/index.pl'> 
<br>Таблица:
<br>
<input type='radio' name='money' value='Spects'checked>
<input type='hidden' name='t' value='save'> 
квартиры
<input type='radio' name='money' value='Bayers'>
<input type='hidden' name='t' value='save'> 
продавцы
<input type='radio' name='money' value='product'>
<input type='hidden' name='t' value='save'> 
клиенты
<br>
<input type='hidden' name='t' value='save'> 
<input type='text' name='fio'>
<input type='hidden' name='t' value='save'> 
<input type='text' name='group'>     
<input type='hidden' name='t' value='save'> 
<input type='text' name='lab'>
<br>
<br>
<input type='submit'><input type='reset'> 
 
        </form> 
</body></html>"; 



