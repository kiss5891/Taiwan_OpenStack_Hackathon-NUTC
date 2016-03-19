
from os import environ as env
import keystoneclient.v2_0.client as ksclient

keystone = ksclient.Client(auth_url='http://172.17.18.3:5000/v2.0',
                           username='hackthon25',
                           password='yeepieth',
                           tenant_name='hackthon25')
print keystone.auth_token

