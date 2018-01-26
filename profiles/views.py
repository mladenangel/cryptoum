from django.contrib.auth.decorators import login_required
from django.shortcuts import render

# Create your views here.





def userProfile(request):
	user = request.user
	context = {'user': user}
	temlates = 'profile.html'
	return render(request,temlates,context)	
