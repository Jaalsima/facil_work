<footer class="bg-gray-600 text-white py-4">
    <div class="container mx-auto">
        <div class="flex justify-between items-center px-4">
            <div>
                <address>
                    <span class="text-blue-300 text-xl font-bold">Fácil Work</span> {{ date('Y') }} &copy;
                </address>
            </div>
            <div class="text-sm flex items-center">
                <!-- Enlaces a las políticas del servicio -->
                <a href="{{ route('policy') }}" class="text-white hover:text-gray-300 mx-2">Política de Privacidad</a>
                <a href="{{ route('terms') }}" class="text-white hover:text-gray-300 mx-2">Términos de Servicio</a>
            </div>
            <div>
                <!-- Íconos de redes sociales -->
                <a href="#" class="text-white hover:text-gray-300 mx-2" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="text-white hover:text-gray-300 mx-2" title="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="text-white hover:text-gray-300 mx-2" title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
