from .common import *  # noqa

DEBUG = False

SECRET_KEY = '{{ epiquote_secret_key }}'

ALLOWED_HOSTS = ['*']

SITE_HOST = "epiquote.fr"

DATABASES = {
    'default': {
        'ENGINE': 'django.db.backends.postgresql',
        'NAME': 'epiquote',
    }
}

STATIC_ROOT = '{{ epiquote_static }}'

ENABLE_EPITA_CONNECT = True
SOCIAL_AUTH_EPITA_KEY = '{{ epiquote_social_auth_epita_key }}'
SOCIAL_AUTH_EPITA_SECRET = '{{ epiquote_social_auth_epita_secret }}'
AUTHENTICATION_BACKENDS += ('epita_connect.backend.EpitaOpenIdConnect',)
if DATABASES['default']['ENGINE'] == 'django.db.backends.postgresql':
    SOCIAL_AUTH_POSTGRES_JSONFIELD = True
