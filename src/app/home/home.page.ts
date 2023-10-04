import { Component } from '@angular/core';
import { Router } from '@angular/router'; // Importe o Router

@Component({
  selector: 'app-home',
  templateUrl: './home.page.html',
  styleUrls: ['./home.page.scss'],
})
export class HomePage {
  constructor(private router: Router) {}

  // Função para lidar com o clique no botão "Enviar"
  enviarParaConfirmado() {
    this.router.navigate(['/confirmado']); // Navega para a página "confirmado"
  }
}
