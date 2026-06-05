# ITMB AI Knowledge Bot

## Overview

This project is an AI-powered internal knowledge assistant designed for ITMB.

The system allows users to ask questions about company services, pricing, workflows, and capabilities, and receive grounded answers based on structured internal documentation.

This is an initial planning and architecture phase (no implementation yet).

---

## Goal

The main goal of this project is to design and build a modular AI system with the following capabilities:

- Company knowledge retrieval
- Context-aware AI responses
- Session-based memory
- Clean separation of retrieval and generation logic
- Simple and extensible architecture

---

## MVP Scope

The first version of the system will include:

- Markdown-based knowledge base
- Basic retrieval mechanism (keyword or similarity-based)
- AI response generation via external API
- Session memory (short-term conversation history)
- Simple web interface for interaction

---

## Planned Architecture

User Input  
→ Controller  
→ Retrieval Layer (Documents)  
→ Context Builder  
→ AI Provider  
→ Memory Layer  
→ Response Output  

This separation is intentional to ensure scalability and maintainability.

---

## Tech Strategy

- Backend: Laravel (chosen for structure and scalability)
- Frontend: Simple Blade + Bootstrap (focus on backend logic)
- AI Provider: External API (Arvan AI or equivalent)
- Storage: Markdown files + lightweight JSON memory (MVP stage)

---

## Design Principles

- Keep the system modular
- Separate retrieval, memory, and generation layers
- Avoid over-engineering in MVP phase
- Optimize for clarity and future extensibility

---

## Future Improvements

After MVP completion, the system can be extended with:

- Semantic search using embeddings
- Vector database integration
- Long-term memory system
- Context compression and summarization
- Admin dashboard for knowledge management
- Multi-user support and analytics

---

## Status

Phase: **Planning**  
Implementation: Not started  
Goal: Architecture definition and roadmap finalization