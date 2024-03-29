"""cryptoum URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/1.11/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  url(r'^$', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  url(r'^$', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.conf.urls import url, include
    2. Add a URL to urlpatterns:  url(r'^blog/', include('blog.urls'))
"""

from django.conf.urls import url, include
from django.contrib import admin
from profiles import views as profiles_views
from buysell import views as buysell_views
from django.conf import settings
from django.conf.urls.static import static
from tools import views as tools_views
from setting import views as setting_views

urlpatterns = [
    url(r'^admin/', admin.site.urls),
    url(r'^buy/$', buysell_views.buy, name='buy'),
    url(r'^accounts/', include('allauth.urls')),
    url(r'^socialaccounts/', include('allauth.urls')),
    url(r'^tools/$', tools_views.tools, name='tools'),
    url(r'^setting/$', setting_views.setting, name='setting'),
    url(r'^app/', include('app.urls')),
    url(r'^', include('app.urls')),
    ]

if settings.DEBUG:
    urlpatterns += static(settings.STATIC_URL, document_root = settings.STATIC_ROOT)
    urlpatterns += static(settings.MEDIA_URL, document_root = settings.MEDIA_ROOT)