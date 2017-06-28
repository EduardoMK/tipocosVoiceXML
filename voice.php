<?php

print ('<vxml version="2.1" xml:lang="pt-BR">');

print ('<form>');
print ('<field name="nome_da_lista">');

print ('<prompt>Informe o nome desejado</prompt>');
print ('<grammar>');
print ('[(paulo)(eduardo)(renan)(jacques)(maria)(oscar)(rejane)(pedro)(tiago)(helena)(joão)]');
print ('</grammar>');
print ('<filled>');

print (' <submit method="post" namelist="nome_da_lista" next="http://topicosespeciaisvoicexml.96.lt/confirma.php"/>');

print ('</filled>');
print ('</field>');
print ('</form>');

print ('<nomatch>');
print ('  Nao foi possivel entender o nome do contado');
print ('  <reprompt />');
print ('</nomatch>');

print ('</vxml>');


?>
