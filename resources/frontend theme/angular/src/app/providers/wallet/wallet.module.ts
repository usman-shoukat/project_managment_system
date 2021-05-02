import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { NgSelect2Module } from 'ng-select2';
import { WalletComponent } from './wallet.component';
import { WalletRoutingModule } from './wallet-routing.module';

@NgModule({
  declarations: [ WalletComponent ],
  imports: [NgSelect2Module, CommonModule, WalletRoutingModule],
})
export class WalletModule {}
